<?php
  require_once("../../componentes/modal.php");
  require_once '../../dao/VendaDao.php';
  require_once '../../dao/ClienteDao.php';
  $clientes = ClienteDao::selectAll();

  
  if (!empty ($_POST)) {
    $cod_Venda = $vendaDao ['codVenda'];
    $preco_Venda = $vendaDao ['precoVenda'];
    $data_Venda = $vendaDao ['dataVenda'];
    $cod_Cliente = $vendaDao ['codCliente'];
    
  } else {
    $cod_Venda = '';
    $preco_Venda = '';
    $data_Venda = '';
    $cod_Cliente = '';
    
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
          <form method="POST" action="process-venda.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DA VENDA</strong>
              <input type="hidden" name="codVenda" id="codVenda" placeholder="Código da Venda" value="<?=$cod_Venda?>">
              <input type="hidden" value="<?=$cod_Venda?'ATUALIZAR':'SALVAR'?>" name="acao" >
            </div>
            <div class="card-body row justify-content-center align-items-center">
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <label for="desc" class="col-form-label">Valor</label>
                    <input type="text" class="form-control" name="precoVenda" maxlength="50" id="precoVenda" value="<?=$preco_Venda?>" required>
                    <div class="invalid-feedback">
                      Nome Inválido
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="nasc" class="col-form-label">Data :</label>
                    <input type="date" class="form-control" name="dataVenda" id="dataVenda" value="<?=$data_Venda?>" required>
                    <div class="invalid-feedback">
                      Data Inválido
                    </div>
                  </div>

                  <div class="col-md-4">
                    <label for="cliente" class="col-form-label">Cliente:</label>
                    <select class="form-control" name="codCliente" id="codCliente" required>
                      <?php foreach($clientes as $cliente)  {?>
                              <option value="<?=$cliente[0]?>" <?=$cod_Cliente==$cliente[0]?'selected':''?> ><?=$cliente[1]?></option>
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