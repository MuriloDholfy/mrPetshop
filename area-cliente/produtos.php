<!DOCTYPE html>
<?php
  session_start(); 
  require_once '../dao/ProdutoDao.php';
  $produtos = ProdutoDao::selectAll();



?>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MR PetShop - Produtos</title>
  <link rel="shortcut icon" href="./../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/produto.css">

</head>

<body style="justify-content: center; align-items: center; height: 100vh; background-color: #202020;">
  <?php
    if (isset($_SESSION['codCliente'])) {
      // Cliente está autenticado, exibe informações e link de logout
      include('./../componentes/header-cliente-logado.php');
        //echo 'Bem-vindo, ' . $_SESSION['nomeCliente'] . '! ';
        //echo '<a href="logout.php">Logout</a>';
    } else {
        // Cliente não está autenticado, exibe link de login
        include('./../componentes/header-cliente.php');
        //echo '<a href="login.php">Login</a>';
    }
  ?>

  <div class="container04 justify-content-center align-items-center">

    <h5 class="card-title text-white text-center m-5">Ofertas</h5>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../img/site/slide1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../img/site/slide2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/site/slide3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      
    </div>

    <h5 class="card-title text-white text-center m-5">Categoria 1</h5>
    <!-- ... Seu código anterior ... -->

<div class="row">
  <?php 
  $count = 0;
  foreach($produtos as $produto) { 
    if ($count % 3 == 0) {
      // Inicia uma nova linha a cada 3 produtos
      echo '</div><div class="row">';
    }
  ?>
    <div class="col-md-4">
      <div class="wrapper mb-5">
        <div class="product-card">
          <a href="#" class="product-link">
            <img src="../img/user/<?=$produto[4]?>" ></img>
            <span class="overlay"></span>
            <span class="info">
              <span class="title"><?=$produto[1]?></span>
              <span class="price"><span class="woocommerce-Price-currencySymbol mx-2"></span>$<?=$produto[2]?> </span>
            </span>
          </a>
          <div class="button-wrap">
            <a href="./item.php" class="cart button " style="background-color: #F19102;">Comprar</a>
          </div>
        </div>
      </div>
    </div>
  <?php 
    $count++;
  } 
  ?>
</div>

<!-- ... Seu código posterior ... -->

    <?php
    include('./../componentes/footer-cliente.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
      // Adicione este script para lidar com o evento de clique nos cards de produto
      document.addEventListener('DOMContentLoaded', function () {
        var productCards = document.querySelectorAll('.product-card');

        productCards.forEach(function (card) {
          card.addEventListener('click', function (event) {
            // Evite o comportamento padrão do evento de clique
            event.preventDefault();
          });
        });
      });
    </script>

  </body>

</html>
