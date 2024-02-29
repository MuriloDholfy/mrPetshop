<?php
  require_once("../../componentes/modal.php");
  require_once '../../dao/ClienteDao.php';
  


  if (!empty ($_POST)) {
    $cod_Cliente = $clienteDao ['codCliente'];
    $nome_Cliente = $clienteDao ['nomeCliente'];
    $cpf_Cliente = $clienteDao ['cpfCliente'];
    $dataNasc_Cliente = $clienteDao ['dataNascCliente'];
    $lograd_Cliente = $clienteDao ['logradCliente'];
    $numLograd_Cliente = $clienteDao ['numLogradCliente'];
    $cep_Cliente = $clienteDao ['cepCliente'];
    $bairro_Cliente = $clienteDao ['bairroCliente'];
    $cidade_Cliente = $clienteDao ['cidadeCliente'];
    $complemento_Cliente = $clienteDao ['complementoCliente'];
    $email_Cliente = $clienteDao ['emailCliente'];
    $password_Cliente = $clienteDao ['passwordCliente'];
    $img_Cliente = $clienteDao ['imgCliente'];
  } else {
    $nome_Cliente = '';
    $cpf_Cliente = '';
    $dataNasc_Cliente = '';
    $lograd_Cliente = '';
    $numLograd_Cliente = '';
    $cep_Cliente = '';
    $bairro_Cliente = '';
    $cidade_Cliente = '';
    $complemento_Cliente = '';
    $email_Cliente = '';
    $password_Cliente = '';
    $img_Cliente = '';
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
          <form method="POST" action="process-clientes.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DO CLIENTE</strong>
              <input type="hidden" name="codCliente" id="codCliente" placeholder="Código Cliente" value="<?=$cod_Cliente?>">
              <input type="hidden" name="imgCliente" id="imgCliente" placeholder="Nome Foto" value="<?=$img_Cliente?>">
              <input type="hidden" value="<?=$cod_Cliente?'ATUALIZAR':'SALVAR'?>" name="acao" >
            </div>
            <div class="card-body row justify-content-center align-items-center">
              <div class="col-md-2   text-center">
                <div class="bg-white rounded">
                  <!--criar sessão da foto-->
                  <img id="preview" src="../../img/user/<?=$img_Cliente!="" ? $img_Cliente : 'clientePadrao.png';?>" alt="..."
                    class="rounded  w-100  "  style="height:200px; object-fit: cover; border:4px solid #ccc" >
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="nome" class="col-form-label">Nome:</label>
                    <input type="text" class="form-control" name="nomeCliente" maxlength="50" id="nomeCliente" value="<?=$nome_Cliente?>" required>
                    <div class="invalid-feedback">
                      Nome Inválido
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="cpf" class="col-form-label">CPF:</label>
                    <input type="text" class="form-control" name="cpfCliente" maxlength="50" id="cpfAdm"
                      data-mask="000.000.000-00" data-mask-selectonfocus="true" value="<?=$cpf_Cliente?>" required>
                    <div class="invalid-feedback">
                      CPF Inválido
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="nasc" class="col-form-label">Data de Nascimento:</label>
                    <input type="date" class="form-control" name="dataNascCliente" id="dataNascCliente" value="<?=$dataNasc_Cliente?>" required>
                    <div class="invalid-feedback">
                      Data Inválido
                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="nome" class="col-form-label">Logradouro:</label>
                    <input type="text" class="form-control" name="logradCliente" maxlength="50" id="logradCliente" value="<?=$lograd_Cliente?>" required>
                    <div class="invalid-feedback">
                      Logradouro Inválido
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="número" class="col-form-label">Número:</label>
                    <input type="text" class="form-control" name="numLogradCliente" maxlength="50" id="numLogradCliente"
                      value="<?=$numLograd_Cliente?>" required>
                    <div class="invalid-feedback">
                      Número Inválido
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="CEP" class="col-form-label">CEP:</label>
                    <input type="text" class="form-control" name="cepCliente" maxlength="50" id="cepCliente"
                    data-mask="00000-000" data-mask-selectonfocus="true" value="<?=$cep_Cliente?>" required>
                    <div class="invalid-feedback">
                      CEP Inválido
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 mb-3">
                    <label for="bairro" class="col-form-label">Bairro:</label>
                    <input type="text" class="form-control" name="bairroCliente" maxlength="50" id="bairroCliente" value="<?=$bairro_Cliente?>" required>
                    <div class="invalid-feedback">
                      Bairro Inválido
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="cidade" class="col-form-label">Cidade:</label>
                    <input type="text" class="form-control" name="cidadeCliente" maxlength="50" id="cidadeCliente"
                      value="<?=$cidade_Cliente?>" required>
                    <div class="invalid-feedback">
                      Cidade Inválido
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="complemento" class="col-form-label">Complemento:</label>
                    <input type="text" class="form-control" name="complementoCliente" maxlength="50" id="complementoCliente"
                      value="<?=$complemento_Cliente?>">
                    <div class="invalid-feedback">
                      Complemento Inválido
                    </div>
                  </div>

                </div>

                
                <div class="row">
                  
                  <div class="col-md-6">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" name="emailCliente" maxlength="100" value="<?=$email_Cliente?>"
                      id="emailCliente" required>
                    <div class="invalid-feedback">
                      E-mail Inválido
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="passwordAdm" class="col-form-label">Senha:</label>
                    <input type="password" class="form-control" name="passwordCliente" value="<?=$password_Cliente?>" maxlength="20"
                      id="passwordCliente" required>
                    <div class="invalid-feedback">
                      Senha Inválido
                    </div>
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