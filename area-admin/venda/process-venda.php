<?php
require_once '../../model/Venda.php';
require_once '../../dao/VendaDao.php';
require_once '../../model/Mensagem.php';

$venda = new Venda();
$msg = new Mensagem ();



switch ($_POST ["acao"]) {
  case 'DELETE':
    try {
      $vendaDao = VendaDao:: delete ($_POST ['codDeletar']);
      header ("Location:index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ', $e -> getMessage (), "\n";
    }
    break;
    case 'SALVAR':
    
      $venda->setCodVenda($_POST['codVenda']);
      $venda->setPrecoVenda($_POST['precoVenda']);
      $venda->setDataVenda($_POST['dataVenda']);
      $venda->setCodCliente($_POST['codCliente']);

      try {
        $vendaDao = VendaDao:: insert ($venda);
        //$msg-> setMensagem ("Usuário salvo com sucesso.", "bg-sucess");
        header ("Location:index.php");
      } catch (Exception $e) {
        $msg->setMensagem ("Verifique os dados digitados.", "bg-danger");
        header ("Location: register-vendas.php");
      }
      break;
    
      case 'ATUALIZAR':
        $venda->setCodVenda($_POST['codVenda']);
        $venda->setPrecoVenda($_POST['precoVenda']);
        $venda->setDataVenda($_POST['dataVenda']);
        $venda->setCodCliente($_POST['codCliente']);
        
      try {
        $vendaDao = VendaDao::update ($_POST ["codVenda"], $venda);
        //$msg->setMensagem ("Usuário atualizado com sucesso.", "bg-sucess");
        header ("Location:index.php");
    
      } catch (Exception $e) {
        echo 'Exceção capturada: ', $e-> getMessage(), "\n";
    
      }
      break;
    
      case 'SELECTID':
        try { 
          $vendaDao = VendaDao:: selectId ($_POST['id']);
          include ('register-venda.php');
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