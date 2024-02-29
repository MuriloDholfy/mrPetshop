<?php
  require_once("../../componentes/modal.php");
  require_once '../../dao/AdmDao.php';
  
  if (!empty ($_POST)) {
    $cod_Adm = $admDao ['codAdm'];
    $nome_Adm = $admDao ['nomeAdm'];
    $cpf_Adm = $admDao ['cpfAdm'];
    $dataNasc_Adm = $admDao ['dataNascAdm'];
    $email_Adm = $admDao ['emailAdm'];
    $password_Adm = $admDao ['passwordAdm'];
    $img_Adm = $admDao ['imgAdm'];
  } else {
    $nome_Adm = '';
    $cpf_Adm = '';
    $dataNasc_Adm = '';
    $email_Adm = '';
    $password_Adm = '';
    $img_Adm = '';
    $cod_Adm = '';
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
          <form method="POST" action="process.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DO USUÁRIO</strong>
              <input type="hidden" name="codAdm" id="codAdm" placeholder="Código Adm" value="<?=$cod_Adm?>">
              <input type="hidden" name="imgAdm" id="imgAdm" placeholder="Nome Foto" value="<?=$img_Adm?>">
              <input type="hidden" value="<?=$cod_Adm?'ATUALIZAR':'SALVAR'?>" name="acao" >
            </div>
            <div class="card-body row justify-content-center align-items-center">
              <div class="col-md-2   text-center">
                <div class="bg-white rounded">
                  <!--criar sessão da foto-->
                  <img id="preview" src="../../img/user/<?=$img_Adm!="" ? $img_Adm : 'padrao.png';?>" alt="..."
                    class="rounded  w-100  "  style="height:200px; object-fit: cover; border:4px solid #ccc" >
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="nome" class="col-form-label">Nome:</label>
                    <input type="text" class="form-control" name="nomeAdm" maxlength="50" id="nomeAdm" value="<?=$nome_Adm?>" required>
                    <div class="invalid-feedback">
                      Nome Inválido
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="cpf" class="col-form-label">CPF:</label>
                    <input type="text" class="form-control" name="cpfAdm" maxlength="50" id="cpfAdm"
                      data-mask="000.000.000-00" data-mask-selectonfocus="true" value="<?=$cpf_Adm?>" required>
                    <div class="invalid-feedback">
                      CPF Inválido
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="nasc" class="col-form-label">Data de Nascimento:</label>
                    <input type="date" class="form-control" name="dataNascAdm" id="dataNascAdm" value="<?=$dataNasc_Adm?>" required>
                    <div class="invalid-feedback">
                      Data Inválido
                    </div>
                  </div>

                </div>
                <div class="row">
                  
                  <div class="col-md-6">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" name="emailAdm" maxlength="100" value="<?=$email_Adm?>"
                      id="email" required>
                    <div class="invalid-feedback">
                      E-mail Inválido
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="passwordAdm" class="col-form-label">Senha:</label>
                    <input type="password" class="form-control" name="passwordAdm" value="<?=$password_Adm?>" maxlength="10"
                      id="passwordAdm" required>
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