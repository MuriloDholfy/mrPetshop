<?php
require_once '../../model/Cliente.php';
require_once '../../dao/ClienteDao.php';
require_once '../../model/Mensagem.php';

$cliente = new Cliente();
$msg = new Mensagem ();

switch ($_POST ["acao"]) {
  case 'DELETE':
    try {
      $clienteDao = ClienteDao:: delete ($_POST ['codDeletar']);
      header ("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ', $e -> getMessage (), "\n";
    }
    break;
    case 'SALVAR':
    
      $cliente->setCodCliente($_POST['codCliente']);
      $cliente->setNomeCliente($_POST['nomeCliente']);
      $cliente->setCpfCliente($_POST['cpfCliente']);
      $cliente->setDataNascCliente($_POST['dataNascCliente']);
      $cliente->setLogradCliente($_POST['logradCliente']);
      $cliente->setNumLogradCliente($_POST['numLogradCliente']);
      $cliente->setCepCliente($_POST['cepCliente']);
      $cliente->setBairroCliente($_POST['bairroCliente']);
      $cliente->setCidadeCliente($_POST['cidadeCliente']);
      $cliente->setComplementoCliente($_POST['complementoCliente']);    
      $cliente->setEmailCliente($_POST['emailCliente']);
      $cliente->setPasswordCliente($_POST['passwordCliente']);
      $cliente->setImgCliente($cliente-> salvarImagem($_POST['imgCliente']));
      $cliente->setTokenCliente($cliente->generateToken());
      try {
        $clienteDao = ClienteDao:: insert ($cliente);
        $msg-> setMensagem ("Usuário salvo com sucesso.", "bg-sucess");
        header ("Location:index.php");
      } catch (Exception $e) {
        $msg->setMensagem ("Verifique os dados digitados.", "bg-danger");
        header ("Location: register-clientes.php");
      }
      break;
    
      case 'ATUALIZAR':
        $cliente->setCodCliente($_POST['codCliente']);
        $cliente->setNomeCliente($_POST['nomeCliente']);
        $cliente->setCpfCliente($_POST['cpfCliente']);
        $cliente->setDataNascCliente($_POST['dataNascCliente']);
        $cliente->setLogradCliente($_POST['logradCliente']);
        $cliente->setNumLogradCliente($_POST['numLogradCliente']);
        $cliente->setCepCliente($_POST['cepCliente']);
        $cliente->setBairroCliente($_POST['bairroCliente']);
        $cliente->setCidadeCliente($_POST['cidadeCliente']);
        $cliente->setComplementoCliente($_POST['complementoCliente']);    
        $cliente->setEmailCliente($_POST['emailCliente']);
        $cliente->setPasswordCliente($_POST['passwordCliente']);
        $cliente->setImgCliente($cliente-> salvarImagem($_POST['imgCliente']));
        $cliente->setTokenCliente($cliente->generateToken());
      try {
        $clienteDao = ClienteDao::update ($_POST ["codCliente"], $cliente);
        $msg->setMensagem ("Usuário atualizado com sucesso.", "bg-sucess");
        header ("Location:index.php");
    
      } catch (Exception $e) {
        echo 'Exceção capturada: ', $e-> getMessage(), "\n";
    
      }
      break;
    
      case 'SELECTID':
        try {
          $clienteDao = ClienteDao:: selectId ($_POST['id']);
          include ('register-clientes.php');
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