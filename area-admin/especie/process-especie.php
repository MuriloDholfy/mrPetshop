<?php
require_once '../../model/Especie.php';
require_once '../../dao/EspecieDao.php';
require_once '../../model/Mensagem.php';

$especie = new Especie();
$msg = new Mensagem ();



switch ($_POST ["acao"]) {
  case 'DELETE':
    try {
      $especieDao = EspecieDao:: delete ($_POST ['codDeletar']);
      header ("Location:index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ', $e -> getMessage (), "\n";
    }
    break;
    case 'SALVAR':
    
      $especie->setCodEspecie($_POST['codEspecie']);
      $especie->setDescEspecie($_POST['descEspecie']);
     

      try {
        $especieDao = EspecieDao:: insert ($especie);
        //$msg-> setMensagem ("Usuário salvo com sucesso.", "bg-sucess");
        header ("Location:index.php");
      } catch (Exception $e) {
        $msg->setMensagem ("Verifique os dados digitados.", "bg-danger");
        header ("Location: register-especie.php");
      }
      break;
    
      case 'ATUALIZAR':
        $especie->setCodEspecie($_POST['codEspecie']);
        $especie->setDescEspecie($_POST['descEspecie']);
        
      try {
        $especieDao = EspecieDao::update ($_POST ["codEspecie"], $especie);
        //$msg->setMensagem ("Usuário atualizado com sucesso.", "bg-sucess");
        header ("Location:index.php");
    
      } catch (Exception $e) {
        echo 'Exceção capturada: ', $e-> getMessage(), "\n";
    
      }
      break;
    
      case 'SELECTID':
        try { 
          $especieDao = EspecieDao:: selectId ($_POST['id']);
          include ('register-especie.php');
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