<?php
require_once '../../model/Agendamento.php';
require_once '../../dao/AgendamentoDao.php';
require_once '../../model/Mensagem.php';

$agendamento = new Agendamento();
$msg = new Mensagem ();

switch ($_POST ["acao"]) {
  case 'DELETE':
    try {
      $agendamentoDao = AgendamentoDao:: delete ($_POST ['codDeletar']);
      header ("Location:index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ', $e -> getMessage (), "\n";
    }
    break;
    case 'SALVAR':
        $agendamento->setCodAgendamento ($_POST['codAgendamento']);
        $agendamento->setDataAgendamento($_POST['dataAgendamento']);
        $agendamento->setHoraAgendamento($_POST['horaAgendamento']);
        $agendamento->setCodPet($_POST['codPet']);
        $agendamento->setObsAgendamento($_POST['obsAgendamento']);

      try {
        $agendamentoDao = AgendamentoDao:: insert ($agendamento);
        //$msg-> setMensagem ("Usuário salvo com sucesso.", "bg-sucess");
        header ("Location:index.php");
      } catch (Exception $e) {
        $msg->setMensagem ("Verifique os dados digitados.", "bg-danger");
        header ("Location: register-agendamento.php");
      }
      break;
    
      case 'ATUALIZAR':
        $agendamento->setCodAgendamento ($_POST['codAgendamento']);
        $agendamento->setDataAgendamento($_POST['dataAgendamento']);
        $agendamento->setHoraAgendamento($_POST['horaAgendamento']);
        $agendamento->setCodPet($_POST['codPet']);
        $agendamento->setObsAgendamento($_POST['obsAgendamento']);
        
      try {
        $agendamentoDao = AgendamentoDao::update ($_POST ["codAgendamento"], $agendamento);
        //$msg->setMensagem ("Usuário atualizado com sucesso.", "bg-sucess");
        header ("Location:index.php");
    
      } catch (Exception $e) {
        echo 'Exceção capturada: ', $e-> getMessage(), "\n";
        header ("Location: register-agendamento.php");
      }
      break;
    
      case 'SELECTID':
        try { 
          $agendamentoDao = AgendamentoDao:: selectId ($_POST['id']);
          include ('register-agendamento.php');
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
