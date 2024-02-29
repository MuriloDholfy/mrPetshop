<?php
  require_once("../../componentes/modal.php");
  require_once '../../dao/ProdutoDao.php';
  
  if (!empty ($_POST)) {
    $cod_Produto = $produtoDao ['codProduto'];
    $desc_Produto = $produtoDao ['descProduto'];
    $valor_Produto = $produtoDao ['valorProduto'];
    $agendamento_Produto = $produtoDao ['agendamentoProduto'];
    $img_Produto =  $produtoDao ['imgProduto'];
  } else {
    $cod_Produto = '';
    $desc_Produto= '';
    $valor_Produto = '';
    $agendamento_Produto = '';
    $img_Produto = '';
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
          <form method="POST" action="process-produto.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DOS PRODUTOS</strong>
              <input type="hidden" name="codProduto" id="codProduto" placeholder="Código Produto" value="<?=$cod_Produto?>">
              <input type="hidden" name="imgProduto" id="imgProduto" placeholder="Nome Foto" value="<?=$img_Produto?>">
              <input type="hidden" value="<?=$cod_Produto?'ATUALIZAR':'SALVAR'?>" name="acao" >
            </div>
            <div class="card-body row justify-content-center align-items-center">
              <div class="col-md-2   text-center">
                <div class="bg-white rounded">
                  <!--criar sessão da foto-->
                  <img id="preview" src="../../img/user/<?=$img_Produto!="" ? $img_Produto : 'produtoPadrao.png';?>" alt="..."
                    class="rounded  w-100  "  style="height:200px; object-fit: cover; border:4px solid #ccc" >
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-5 mb-3">
                    <label for="desc" class="col-form-label">Descrição (Nome):</label>
                    <input type="text" class="form-control" name="descProduto" maxlength="50" id="descProduto" value="<?=$desc_Produto?>" required>
                    <div class="invalid-feedback">
                      Nome Inválido
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="valor" class="col-form-label">Valor (R$):</label>
                    <input type="text" class="form-control" name="valorProduto" maxlength="50" id="valorProduto" data-mask-selectonfocus="true" value="<?=$valor_Produto?>" required>
                    <div class="invalid-feedback">
                      Valor Inválido
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="Agendamento" class="col-form-label">Agendamento:</label>
                    <select class="form-control" name="agendamentoProduto" id="agendamentoProduto" required>
                      <option value="Sim" <?= $agendamento_Produto == 'Sim' ? 'selected': ''?>>Sim</option>
                      <option value="Não" <?= $agendamento_Produto == 'Não' ? 'selected' : '' ?>>Não</option>
                    </select>

                  
                  </div>

                </div>
                <div class="row mt-5 ">
                  <div class="col-md-2">
                    <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
                  </div>
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