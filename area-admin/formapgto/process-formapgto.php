<?php
require_once '../../model/FormaPgto.php';
require_once '../../dao/FormaPgtoDao.php';
require_once '../../model/Mensagem.php';

$formapgto = new FormaPgto();
$msg = new Mensagem ();



switch ($_POST ["acao"]) {
  case 'DELETE':
    try {
      $formaPgtoDao = FormaPgtoDao:: delete ($_POST ['codDeletar']);
      header ("Location:index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ', $e -> getMessage (), "\n";
    }
    break;
    case 'SALVAR':
    
      $formapgto->setCodFormaPgto($_POST['codFormaPgto']);
      $formapgto-> setDescFormaPgto ($_POST['descFormaPgto']);
     

      try {
        $formaPgtoDao = FormaPgtoDao:: insert ($formapgto);
        //$msg-> setMensagem ("Usuário salvo com sucesso.", "bg-sucess");
        header ("Location:index.php");
      } catch (Exception $e) {
        $msg->setMensagem ("Verifique os dados digitados.", "bg-danger");
        header ("Location: register-formapgto.php");
      }
      break;
    
      case 'ATUALIZAR':
        $formapgto->setCodFormaPgto($_POST['codFormaPgto']);
        $formapgto->setDescFormaPgto($_POST['descFormaPgto']);
        
      try {
        $formaPgtoDao = FormaPgtoDao::update ($_POST ["codFormaPgto"], $formapgto);
        //$msg->setMensagem ("Usuário atualizado com sucesso.", "bg-sucess");
        header ("Location:index.php");
    
      } catch (Exception $e) {
        echo 'Exceção capturada: ', $e-> getMessage(), "\n";
    
      }
      break;
    
      case 'SELECTID':
        try { 
          $formaPgtoDao = FormaPgtoDao:: selectId ($_POST['id']);
          include ('register-formapgto.php');
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