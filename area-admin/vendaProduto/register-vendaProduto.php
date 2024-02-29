<?php
  require_once("../../componentes/modal.php");
  require_once '../../dao/VendaProdutoDao.php';
  require_once '../../dao/VendaDao.php';
  require_once '../../dao/ProdutoDao.php';
  require_once '../../dao/FormaPgtoDao.php';
  require_once '../../dao/AgendamentoDao.php';
  $vendas = VendaDao::selectAll();
  $produtos = ProdutoDao::selectAll();
  $formaspgto = FormaPgtoDao::selectAll();
  $agendamentos = AgendamentoDao::selectAll();

  if (!empty ($_POST)) {
    $cod_VendaProduto = $vendaProdutoDao ['codVendaProduto'];
    $cod_Venda = $vendaProdutoDao ['codVenda'];
    $cod_Produto = $vendaProdutoDao ['codProduto'];
    $cod_FormaPgto = $vendaProdutoDao ['codFormaPgto'];
    $cod_Agendamento =  $vendaProdutoDao ['codAgendamento'];
  } else {
    $cod_VendaProduto  = '';
    $cod_Venda = '';
    $cod_Produto = '';
    $cod_FormaPgto = '';
    $cod_Agendamento = '';
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
          <form method="POST" action="process-vendaProduto.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DAS VENDAS PRODUTOS</strong>
              <input type="hidden" name="codVendaProduto" id="codVendaProduto" placeholder="Código Venda Produto" value="<?=$cod_VendaProduto?>">
              <input type="hidden" value="<?=$cod_VendaProduto?'ATUALIZAR':'SALVAR'?>" name="acao" >
            </div>
            <div class="card-body row justify-content-center align-items-center">
              <div class=" col-md-10">
                <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="especie" class="col-form-label">Venda:</label>
                    <select class="form-control" name="codVenda" id="codVenda" required>
                      <?php foreach($vendas as $venda)  {?>
                              <option value="<?=$venda[0]?>" <?=$cod_Venda==$venda[0]?'selected':''?> ><?=$venda[0]?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3">
                  <label for="especie" class="col-form-label">Produto:</label>
                    <select class="form-control" name="codProduto" id="codProduto" required>
                      <?php foreach($produtos as $produto)  {?>
                        <option value="<?=$produto[0]?>" <?=$cod_Produto==$produto[0]?'selected':''?> ><?=$produto[1]?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3">
                  <label for="especie" class="col-form-label">Forma de Pagamento:</label>
                    <select class="form-control" name="codFormaPgto" id="codFormaPgto" required>
                      <?php foreach($formaspgto as $formapgto)  {?>
                              <option value="<?=$formapgto[0]?>" <?=$cod_FormaPgto==$formapgto[0]?'selected':''?> ><?=$formapgto[1]?></option>
                      <?php }?>
                    </select>
                  </div>
                  
                  <div class="col-md-4 mb-3">
                  <label for="especie" class="col-form-label">Agendamento:</label>
                    <select class="form-control" name="codAgendamento" id="codAgendamento">
                        <option value="0" >Não é Necessário</option>
                        <?php foreach($agendamentos as $agendamento)  {?>
                            <option value="<?=$agendamento[0]?>" <?=$cod_Agendamento==$agendamento[0]?'selected':''?> ><?=$agendamento[0]?></option>
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