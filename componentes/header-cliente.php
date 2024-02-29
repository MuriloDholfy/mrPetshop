<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seu Site</title>
  <link rel="stylesheet" href="style.css"> <!-- Adicione o link para o arquivo de estilo externo -->
</head>
<body>

<header class="p-3 text-bg-dark sticky-top">
  <div class="position-relative">
    <div class="d-flex flex-wrap align-items-center justify-content-between justify-content-lg-start">
      <a href="home.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="./../img/site/logo.png" class="logo" width="100" height="50" class="d-inline-block align-top" alt="">
      </a>

      <ul class="nav col-12 col-lg-auto mb-2 justify-content-center mb-md-0 ms-auto">
        <li><a href="home.php" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="produtos.php" class="nav-link px-2 text-white">Produtos</a></li>
        <li><a href="sobre.php" class="nav-link px-2 text-white">Quem Somos</a></li>
        <li><a href="#footer" class="nav-link px-2 text-white ">Fale conosco</a></li>
        <li><a type="button" class="btn btn-light me-2" href="./login.php">Login</a></li>
      </ul>
    </div>

    <div class="hamburger-icon">&#9776;</div>

    <!-- Adicione o off-canvas menu -->
    <div class="off-canvas">
      <ul class="nav">
        <div class="close-button" onclick="closeOffCanvas()">&#10006;</div>
            <hr >
        <li><a href="home.php" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="produtos.php" class="nav-link px-2 text-white">Produtos</a></li>
        <li><a href="sobre.php" class="nav-link px-2 text-white">Quem Somos</a></li>
        <li><a href="#footer" class="nav-link px-2 mb-3 text-white">Fale conosco</a></li>
        <l><a type="button" class="btn btn-light me-2 w-100" href="./login.php">Login</a></l>
      </ul>
    </div>
  </div>
</header>

<!-- Adicione um script JavaScript para alternar a visibilidade do off-canvas menu -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const hamburgerIcon = document.querySelector('.hamburger-icon');
    const offCanvas = document.querySelector('.off-canvas');

    hamburgerIcon.addEventListener('click', function () {
      offCanvas.style.display = 'block';
    });

    window.closeOffCanvas = function () {
      offCanvas.style.display = 'none';
    };
  });
</script>

</body>
</html>
