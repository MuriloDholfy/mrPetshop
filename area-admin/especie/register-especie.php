<?php
  require_once("../../componentes/modal.php");
  require_once '../../dao/EspecieDao.php';
  
  if (!empty ($_POST)) {
    $cod_Especie = $especieDao ['codEspecie'];
    $desc_Especie = $especieDao ['descEspecie'];
    
  } else {
    $cod_Especie = '';
    $desc_Especie = '';
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
          <form method="POST" action="process-especie.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DA ESPÉCIE</strong>
              <input type="hidden" name="codEspecie" id="codEspecie" placeholder="Código Especie" value="<?=$cod_Especie?>">
              <input type="hidden" value="<?=$cod_Especie?'ATUALIZAR':'SALVAR'?>" name="acao" >
            </div>
            <div class="card-body row justify-content-center align-items-center">
              
              <div class=" col-md-10">
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="desc" class="col-form-label">Descrição (Nome):</label>
                        <input type="text" class="form-control" name="descEspecie" maxlength="50" id="descEspecie" value="<?=$desc_Especie?>" required>
                        <div class="invalid-feedback">
                            Nome Inválido
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