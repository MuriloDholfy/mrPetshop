<?php
require_once '../../model/Raca.php';
require_once '../../dao/RacaDao.php';
require_once '../../model/Mensagem.php';

$raca = new Raca();
$msg = new Mensagem ();



switch ($_POST ["acao"]) {
  case 'DELETE':
    try {
      $racaDao = RacaDao:: delete ($_POST ['codDeletar']);
      header ("Location:index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ', $e -> getMessage (), "\n";
    }
    break;
    case 'SALVAR':
    
      $raca->setCodRaca($_POST['codRaca']);
      $raca->setDescRaca($_POST['descRaca']);
      $raca->setcodEspecie($_POST['codEspecie']);

      try {
        $racaDao = RacaDao:: insert ($raca);
        //$msg-> setMensagem ("Usuário salvo com sucesso.", "bg-sucess");
        header ("Location:index.php");
      } catch (Exception $e) {
        $msg->setMensagem ("Verifique os dados digitados.", "bg-danger");
        header ("Location: register-produtos.php");
      }
      break;
    
      case 'ATUALIZAR':
        $raca->setCodRaca($_POST['codRaca']);
        $raca->setDescRaca($_POST['descRaca']);
        $raca->setcodEspecie($_POST['codEspecie']);
        
      try {
        $racaDao = RacaDao::update ($_POST ["codRaca"], $raca);
        //$msg->setMensagem ("Usuário atualizado com sucesso.", "bg-sucess");
        header ("Location:index.php");
    
      } catch (Exception $e) {
        echo 'Exceção capturada: ', $e-> getMessage(), "\n";
    
      }
      break;
    
      case 'SELECTID':
        try { 
          $racaDao = RacaDao:: selectId ($_POST['id']);
          include ('register-raca.php');
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