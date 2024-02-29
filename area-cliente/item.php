<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MR PetShop - Produto</title>
  <link rel="shortcut icon" href="./../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- Projeto CSS -->
  <link rel="stylesheet" href="../css/style.css">
  <style>
    /* Adicione estas regras de estilo ao seu arquivo CSS existente */

    /* Estilo padrão para telas com largura maior que 800 pixels */
    @media (min-width: 800px) {
      .col-4 {
        max-width: 33.3333%;
      }

      .col-4 img {
        width: 100%;
      }

      .col-4,
      .col-4.text-white {
        flex: 0 0 33.3333%;
      }
    }

    /* Estilo para telas com largura menor que 800 pixels */
    @media (max-width: 799px) {
      .col-1 {
        display: none; /* Oculta a coluna com as miniaturas */
      }

      .col-4 {
        max-width: 100%; /* Ajusta a largura máxima para ocupar 100% da largura da tela */
      }

      .col-4 img {
        width: 100%; /* Ajusta a largura da imagem para ocupar 100% da largura da coluna */
      }

      .col-4,
      .col-4.text-white {
        flex: 0 0 100%;
      }
    }

    /* Adicione essas regras ao seu arquivo CSS existente */

    /* Telas maiores */
    @media (min-width: 800px) {
      .row {
        display: flex;
      }

      .col-1 {
        order: -1;
      }

      .col-4 {
        flex-grow: 1;
      }
    }

    /* Telas menores */
    @media (max-width: 800px) {
      .row {
        flex-direction: column;
      }

      .col-1 {
        width: 100%;
        margin: 3px;
      }

      .col-4 {
        width: 100%;
        margin: 3px;

      }
    }
  </style>
</head>

<body style="background-color: #202020;">

  <?php 
    include('./../componentes/header-cliente-logado.php');
  ?>

  <div class="container mt-5">
    <div class="row">
      <div class="col-1 collunm ">
        <div class="col-100">
          <img src="https://via.placeholder.com/150" alt="Thumbnail 1" class="img-fluid mb-3">
        </div>
        <div class="col-100">
          <img src="https://via.placeholder.com/150" alt="Thumbnail 2" class="img-fluid mb-3">
        </div>
        <div class="col-100">
          <img src="https://via.placeholder.com/150" alt="Thumbnail 3" class="img-fluid mb-3">
        </div>
        <div class="col-100">
          <img src="https://via.placeholder.com/150" alt="Thumbnail 3" class="img-fluid mb-3">
        </div>
      </div>

      <div class="col-4  ml-2 mb-2" width="400px" >
        <img src="https://via.placeholder.com/400" alt="Product Image" class="img-fluid mb-3">
      </div>
      
      <div class="col-4 text-white mb-3">
        <h1>Produto</h1>
        <p>Marca: Produto</p>
        <div class="product-rating">
          <span class="star bi bi-star-fill"></span>
          <span class="star bi bi-star-fill"></span>
          <span class="star bi bi-star"></span>
          <span class="star bi bi-star"></span>
          <span class="star bi bi-star"></span>
        </div>
        <p>R$ 749,00</p>
        <div>
          <h2>Detalhes do Produto</h2>
          <p>Cor: Azul</p>
          <p>Novo visual, novo som ainda melhor:</p>
          <a href="#" class="botao  ">Comprar</a>
          </div>
      </div>
    </div>
  </div>

  <?php 
    include('./../componentes/footer-cliente.php');
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>

  <script>
    window.addEventListener('resize', function () {
      handleResponsiveLayout();
    });

    document.addEventListener('DOMContentLoaded', function () {
      handleResponsiveLayout();
    });

    function handleResponsiveLayout() {
      var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

      // Defina a largura máxima para a mudança de layout
      var maxWidth = 800;

      // Se a largura da tela for menor que a largura máxima, altere o layout
      if (screenWidth < maxWidth) {
        moveTextBelow();
        changeImagesLayout();
      } else {
        restoreOriginalLayout();
      }
    }

    function moveTextBelow() {
      // Mova o bloco de texto para baixo
      var textColumn = document.querySelector('.col-4.text-white');
      textColumn.style.order = '3'; // Defina a ordem para colocar o texto abaixo das imagens
    }

    function changeImagesLayout() {
      // Mude o layout das imagens para uma nova linha
      var imageColumn = document.querySelector('.col-1.collunm');
      imageColumn.style.display = 'flex';
      imageColumn.style.flexDirection = 'row';
      imageColumn.style.justifyContent = 'space-around';
    }

    function restoreOriginalLayout() {
      // Restaure o layout original
      var textColumn = document.querySelector('.col-4.text-white');
      var imageColumn = document.querySelector('.col-1.collunm');

      textColumn.style.order = '2'; // Restaure a ordem original do texto
      imageColumn.style.display = 'block';
    }
  </script>

  <script>
    // Função para ajustar o layout com base na largura da viewport
    function adjustLayout() {
      var viewportWidth = window.innerWidth || document.documentElement.clientWidth;

      // Verifique se a largura da viewport é inferior a 800 pixels
      if (viewportWidth < 800) {
        // Ajuste os estilos para telas menores
        document.getElementById('productImage').style.width = '100%';
        document.getElementById('productDetails').style.width = '100%';
        document.getElementById('productDetails').style.marginTop = '20px'; // Adicione alguma margem para melhor espaçamento
      } else {
        // Resetar estilos para telas maiores
        document.getElementById('productImage').style.width = 'initial';
        document.getElementById('productDetails').style.width = 'initial';
        document.getElementById('productDetails').style.marginTop = 'initial';
      }
    }

    // Chame a função no carregamento da página e no redimensionamento da janela
    window.onload = adjustLayout;
    window.onresize = adjustLayout;
  </script>

</body>

</html>
