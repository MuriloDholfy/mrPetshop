<?php
require_once '../../model/Produto.php';
require_once '../../dao/ProdutoDao.php';
require_once '../../model/Mensagem.php';

$produto = new Produto();
$msg = new Mensagem ();
var_dump($_POST);


switch ($_POST ["acao"]) {
  case 'DELETE':
    try {
      $produtoDao = ProdutoDao:: delete ($_POST ['codDeletar']);
      header ("Location: produtos.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ', $e -> getMessage (), "\n";
    }
    break;
    case 'SALVAR':
    
      $produto->setCodProduto($_POST['codProduto']);
      $produto->setDescProduto($_POST['descProduto']);
      $produto->setValorProduto($_POST['valorProduto']);
      $produto->setAgendamentoProduto($_POST['agendamentoProduto']);
      $produto->setImgProduto($produto -> salvarImagem($_POST['imgProduto']));

      try {
        $produtoDao = ProdutoDao:: insert ($produto);
        $msg-> setMensagem ("Usuário salvo com sucesso.", "bg-sucess");
        header ("Location:produtos.php");
      } catch (Exception $e) {
        $msg->setMensagem ("Verifique os dados digitados.", "bg-danger");
        header ("Location: register-produtos.php");
      }
      break;
    
      case 'ATUALIZAR':
        $produto->setCodProduto($_POST['codProduto']);
        $produto->setDescProduto($_POST['descProduto']);
        $produto->setValorProduto($_POST['valorProduto']);
        $produto->setAgendamentoProduto($_POST['agendamentoProduto']);
        $produto->setImgProduto($_FILES['imgProduto']);
        $produto->setImgProduto($produto -> salvarImagem($_POST['imgProduto']));
      try {
        $produtoDao = ProdutoDao::update ($_POST ["codProduto"], $produto);
        $msg->setMensagem ("Usuário atualizado com sucesso.", "bg-sucess");
        header ("Location:produtos.php");
    
      } catch (Exception $e) {
        echo 'Exceção capturada: ', $e-> getMessage(), "\n";
    
      }
      break;
    
      case 'SELECTID':
        try {
          $produtoDao = ProdutoDao:: selectId ($_POST['codProduto']);
          include ('register-produtos.php');
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