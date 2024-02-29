<?php
require_once '../../model/Adm.php';
require_once '../../dao/AdmDao.php';
require_once '../../model/Mensagem.php';

$adm = new Adm();
$msg = new Mensagem ();



switch ($_POST ["acao"]) {
  case 'DELETE':
    try {
      $admDao = AdmDao:: delete ($_POST ['codDeletar']);
      header ("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ', $e -> getMessage (), "\n";
    }
    break;
    case 'SALVAR':
    
      $adm->setCodAdm($_POST['codAdm']);
      $adm->setNomeAdm($_POST['nomeAdm']);
      $adm->setCpfAdm($_POST['cpfAdm']);
      $adm->setDataNascAdm($_POST['dataNascAdm']);
      $adm->setEmailAdm($_POST['emailAdm']);
      $adm->setPasswordAdm($_POST['passwordAdm']);
      $adm->setImgAdm($adm-> salvarImagem($_POST['imgAdm']));
      $adm->setTokenAdm($adm->generateToken());
      try {
        $admDao = AdmDao:: insert ($adm);
        $msg-> setMensagem ("Usuário salvo com sucesso.", "bg-sucess");
        header ("Location:index.php");
      } catch (Exception $e) {
        $msg->setMensagem ("Verifique os dados digitados.", "bg-danger");
        header ("Location: register.php");
      }
      break;
    
      case 'ATUALIZAR':
        $adm->setCodAdm($_POST['codAdm']);
        $adm->setNomeAdm($_POST['nomeAdm']);
        $adm->setCpfAdm($_POST['cpfAdm']);
        $adm->setDataNascAdm($_POST['dataNascAdm']);
        $adm->setEmailAdm($_POST['emailAdm']);
        $adm->setPasswordAdm($_POST['passwordAdm']);
        $adm->setImgAdm($adm-> salvarImagem($_POST['imgAdm']));
        $adm->setTokenAdm($adm->generateToken());
      try {
        $admDao = AdmDao::update ($_POST ["codAdm"], $adm);
        $msg->setMensagem ("Usuário atualizado com sucesso.", "bg-sucess");
        header ("Location:index.php");
    
      } catch (Exception $e) {
        echo 'Exceção capturada: ', $e-> getMessage(), "\n";
    
      }
      break;
    
      case 'SELECTID':
        try {
          $admDao = AdmDao:: selectId ($_POST['id']);
          include ('register.php');
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