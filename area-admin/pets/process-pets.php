<?php
require_once '../../model/Pet.php';
require_once '../../dao/PetDao.php';
require_once '../../model/Mensagem.php';

$pet = new Pet();
$msg = new Mensagem ();



switch ($_POST ["acao"]) {
  case 'DELETE':
    try {
      $petDao = PetDao:: delete ($_POST ['codDeletar']);
      header ("Location:index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ', $e -> getMessage (), "\n";
    }
    break;
    case 'SALVAR':
    
      $pet->setCodPet($_POST['codPet']);
      $pet->setDescPet($_POST['descPet']);
      $pet->setCodCliente($_POST['codCliente']);
      $pet->setPesoPet($_POST['pesoPet']);
      $pet->setCodRaca($_POST['codRaca']);

      try {
        $petDao = PetDao:: insert ($pet);
        //$msg-> setMensagem ("Usuário salvo com sucesso.", "bg-sucess");
        header ("Location:index.php");
      } catch (Exception $e) {
        $msg->setMensagem ("Verifique os dados digitados.", "bg-danger");
        header ("Location: register-pets.php");
      }
      break;
    
      case 'ATUALIZAR':
    $pet->setCodPet($_POST['codPet']);
      $pet->setDescPet($_POST['descPet']);
      $pet->setCodCliente($_POST['codCliente']);
      $pet->setPesoPet($_POST['pesoPet']);
      $pet->setCodRaca($_POST['codRaca']);
      try {
        $petDao = PetDao::update ($_POST ["codPet"], $pet);
        //$msg->setMensagem ("Usuário atualizado com sucesso.", "bg-sucess");
        header ("Location:index.php");
    
      } catch (Exception $e) {
        echo 'Exceção capturada: ', $e-> getMessage(), "\n";
    
      }
      break;
    
      case 'SELECTID':
        try { 
          $petDao = PetDao:: selectId ($_POST['id']);
          include ('register-pets.php');
        } catch (Exception $e) {
          echo 'Exceção capturada: ', $e->getMessage(), "\n";
    
        }
        break;
}

  




//$use = AdmDao::insert($adm)







/*echo '<pre>';
print_r($_POST);
echo '</pre>';

echo $_FILES['foto']['name']. "<BR>";*/


/* $_FILES: É um superglobal em PHP que armazena as informações dos arquivos enviados por um formulário.

'foto': É o nome do campo do formulário no qual o arquivo foi enviado. Este nome deve corresponder ao name do campo de entrada no formulário HTML.
name : É a chave usada para acessar o nome do arquivo.
'size': É a chave usada para acessar o tamanho do arquivo.
 */







/*     switch ($_POST["acao"]) {
      case 'Salvar' : 
        echo ('Inserir');
        break;
      } */

?>