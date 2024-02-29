<?php
  require_once("../../componentes/modal.php");
  require_once '../../dao/PetDao.php';
  require_once '../../dao/ClienteDao.php';
  require_once '../../dao/RacaDao.php';
  $clientes = ClienteDao::selectAll();
  $racas = RacaDao::selectAll();
  if (!empty ($_POST)) {
    $cod_Pet = $petDao ['codPet'];
    $desc_Pet = $petDao ['descPet'];
    $cod_Cliente = $petDao ['codCliente'];
    $peso_Pet = $petDao ['pesoPet'];
    $cod_Raca =  $petDao ['codRaca'];
  } else {
    $cod_Pet  = '';
    $desc_Pet = '';
    $cod_Cliente = '';
    $peso_Pet = '';
    $cod_Raca = '';
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
          <form method="POST" action="process-pets.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DOS PET</strong>
              <input type="hidden" name="codPet" id="codPet" placeholder="Código Produto" value="<?=$cod_Pet?>">
              <input type="hidden" value="<?=$cod_Pet?'ATUALIZAR':'SALVAR'?>" name="acao" >
            </div>
            <div class="card-body row justify-content-center align-items-center">
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-5 mb-3">
                    <label for="desc" class="col-form-label">Descrição (Nome):</label>
                    <input type="text" class="form-control" name="descPet" maxlength="50" id="descPet" value="<?=$desc_Pet?>" required>
                    <div class="invalid-feedback">
                      Nome Inválido
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                  <label for="especie" class="col-form-label">Dono:</label>
                    <select class="form-control" name="codCliente" id="codCliente" required>
                      <?php foreach($clientes as $cliente)  {?>
                              <option value="<?=$cliente[0]?>" <?=$cod_Cliente==$cliente[0]?'selected':''?> ><?=$cliente[1]?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="especie" class="col-form-label">Peso</label>
                    <div class="input-group">
                      <input type="numeric" class="form-control" name="pesoPet" maxlength="50" id="pesoPet" value="<?=$peso_Pet?>" required>
                    </div>
                  </div>
                  
                  <div class="col-md-3">
                  <label for="especie" class="col-form-label">Raça:</label>
                    <select class="form-control" name="codRaca" id="codRaca" required>
                      <?php foreach($racas as $raca)  {?>
                              <option value="<?=$raca[0]?>" <?=$cod_Raca==$raca[0]?'selected':''?> ><?=$raca[1]?></option>
                      <?php }?>
                    </select>

                  
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