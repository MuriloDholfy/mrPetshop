<?php
require_once '../model/Produto.php';
require_once '../dao/ProdutoDao.php';
require_once '../model/Mensagem.php';

$produto = new Produto();
$msg = new Mensagem ();



switch ($_POST ["acao"]) {
 
      case 'SELECTID':
        try { 
          $produtoDao = ProdutoDao:: selectId ($_POST['id']);
          include ('formaPgto.php');
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