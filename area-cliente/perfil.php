<?php
    session_start();    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - MR PetShop</title>
    <link rel="shortcut icon" href="./../img/site/logo.png" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- CSS Projeto -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Seu CSS Personalizado -->
    <link rel="stylesheet" href="../css/perfil.css">
</head>

<body style="background-color: #202020;">

    <?php include('./../componentes/header-cliente-logado.php'); ?>

    <div class="container container00 align-items-center justify-content-center mt-5 mb-5 ">
        <div class="perfil row">
            
                <div class="col-md-4">
                    <!-- Informações Pessoais -->
                    <div class="card mt-5">
                        <div class="card-body d-flex flex-wrap align-items-center justify-content-center">

                        <?php if ($_SESSION['imgCliente']==null) { ?>
                            <img src="./../img/user/logo.jpg" alt="mdo" width="250" height="250" class="rounded-circle">
                        <?php } else { ?>
                            <img src="./../img/user/<?php echo $_SESSION['imgCliente']?>"alt="mdo" width="250" height="250" class="rounded-circle">
                        <?php } ?> 
                            <h3 class="card-title m-5"><?=$_SESSION['nomeCliente']?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title  mb-5 ">Informações Pessoais</h5>
                            <p class="card-text">Nome: <?=$_SESSION['nomeCliente']?></p>
                            <p class="card-text">E-mail: <?=$_SESSION['emailCliente']?></p>
                            <p class="card-text">Data de Nascimento: <?= date ('d/m/Y', strtotime ($_SESSION['dataNascCliente'])); ?></p>
                            <p class="card-text">Senha: <?=$_SESSION['passwordCliente']?></p>
                            <!-- Adicione outras informações aqui -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php include('./../componentes/footer-cliente.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- Seus scripts JavaScript personalizados aqui -->

</body>

</html>
