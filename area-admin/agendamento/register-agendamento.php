<?php
  require_once("../../componentes/modal.php");
  require_once '../../dao/AgendamentoDao.php';
  require_once '../../dao/PetDao.php';
  $pets = PetDao::selectAll();
  


  if (!empty ($_POST)) {
    $cod_Agendamento = $agendamentoDao ['codAgendamento'];
    $data_Agendamento = $agendamentoDao ['dataAgendamento'];
    $hora_Agendamento = $agendamentoDao ['horaAgendamento'];
    $cod_Pet = $agendamentoDao ['codPet'];
    $obs_Agendamento = $agendamentoDao ['obsAgendamento'];

  } else {
    $cod_Agendamento ='';
    $data_Agendamento = '';
    $hora_Agendamento ='' ;
    $cod_Pet = '';
    $obs_Agendamento = ''; 
  }
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MR - Petshop</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <?php 
      include('./../../componentes/header-adm.php');
  ?>
  <div class="container-fluid" style="height: 90vh">
    <div class="row h-100">
      <?php 
      include('./../../componentes/menu-adm.php');
      ?>
      <div class="col-md-10  p-4 borber">
        <div class="card">
          <form method="POST" action="process-agendamento.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DO CLIENTE</strong>
              <input type="hidden" name="codAgendamento" id="codAgendamento" placeholder="Código Cliente" value="<?=$cod_Agendamento?>">
              <input type="hidden" value="<?=$cod_Agendamento?'ATUALIZAR':'SALVAR'?>" name="acao" >
            </div>
            <div class="card-body row justify-content-center align-items-center">
              <div class=" col-md-10">
                <div class="row">
                <div class="col-md-3">
                    <label for="nasc" class="col-form-label">Data</label>
                    <input type="date" class="form-control" name="dataAgendamento" id="dataAgendamento" value="<?=$data_Agendamento?>" required>
                    <div class="invalid-feedback">
                      Data Inválido
                    </div>
                </div>
                <div class="col-md-3">
                        <label for="hora" class="col-form-label">Hora</label>
                        <input type="time" class="form-control" name="horaAgendamento" id="horaAgendamento" value="<?=$hora_Agendamento?>" required>
                        <div class="invalid-feedback">
                            Hora Inválida
                        </div>
                    </div>
                <div class="col-md-3">
                    <label for="pet" class="col-form-label">Pet:</label>
                    <select class="form-control" name="codPet" id="codPet" required>
                      <?php foreach($pets as $pet)  {?>
                              <option value="<?=$pet[0]?>" <?=$cod_Pet==$pet[0]?'selected':''?> ><?=$pet[1]?></option>
                      <?php }?>
                    </select>

                  
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="nome" class="col-form-label">Obs:</label>
                    <input type="text" class="form-control" name="obsAgendamento" maxlength="200" id="obsAgendamento" value="<?=$obs_Agendamento?>" required>
                    <div class="invalid-feedback">
                      Agendamento Inválido
                    </div>
                  </div>
                 
                <div class="row mt-5 ">
                  <div class=" text-end  col-md-10">
                  <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                  <input type="submit" class=" btn btn-success" value="Salvar">
                </div>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
  <!-- Para usar Mascara  -->
  <script type="text/javascript" src="./../../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="./../../js/personalizar.js"></script>

</body>

</html>