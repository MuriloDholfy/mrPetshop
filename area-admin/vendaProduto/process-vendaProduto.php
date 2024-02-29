<?php
require_once '../../model/VendaProduto.php';
require_once '../../dao/VendaProdutoDao.php';
require_once '../../model/Mensagem.php';

$vendaProduto = new VendaProduto();
$msg = new Mensagem ();



switch ($_POST ["acao"]) {
  case 'DELETE':
    try {
      $vendaDao = VendaProdutoDao:: delete ($_POST ['codDeletar']);
      header ("Location:index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ', $e -> getMessage (), "\n";
    }
    break;
    case 'SALVAR':
    
      $vendaProduto->setCodVendaProduto($_POST['codVendaProduto']);
      $vendaProduto->setCodVenda($_POST['codVenda']);
      $vendaProduto->setCodProduto($_POST['codProduto']);
      $vendaProduto->setCodFormaPgto($_POST['codFormaPgto']);
      $vendaProduto->setCodAgendamento($_POST['codAgendamento']);

      try {
        $vendaProdutoDao = VendaProdutoDao:: insert ($vendaProduto);
        //$msg-> setMensagem ("Usuário salvo com sucesso.", "bg-sucess");
        header ("Location:index.php");
      } catch (Exception $e) {
        $msg->setMensagem ("Verifique os dados digitados.", "bg-danger");
        header ("Location: register-vendaProduto.php");
      }
      break;
    
      case 'ATUALIZAR':
        $vendaProduto->setCodVendaProduto($_POST['codVendaProduto']);
        $vendaProduto->setCodVenda($_POST['codVenda']);
        $vendaProduto->setCodProduto($_POST['codProduto']);
        $vendaProduto->setCodFormaPgto($_POST['codFormaPgto']);
        $vendaProduto->setCodAgendamento($_POST['codAgendamento']);
      try {
        $vendaProdutoDao = VendaProdutoDao::update ($_POST ["codVendaProduto"], $vendaProduto);
        //$msg->setMensagem ("Usuário atualizado com sucesso.", "bg-sucess");
        header ("Location:index.php");
    
      } catch (Exception $e) {
        echo 'Exceção capturada: ', $e-> getMessage(), "\n";
    
      }
      break;
    
      case 'SELECTID':
        try { 
          $vendaProdutoDao = VendaProdutoDao:: selectId ($_POST['id']);
          include ('register-vendaProduto.php');
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