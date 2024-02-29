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
        <li><a href="#footer" class="nav-link px-2 text-white">Fale conosco</a></li>
        <div class="dropdown text-end">
           <a href="#" class="text-white d-block link-body-emphasis text-decoration-none dropdown-toggle"
             data-bs-toggle="dropdown" aria-expanded="false">

            <?php if ($_SESSION['imgCliente']==null) { ?>
              <img src="./../img/user/logo.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
             <?php } else { ?>
              <img src="./../img/user/<?php echo $_SESSION['imgCliente']?>" alt="mdo" width="32" height="32" class="rounded-circle">
            <?php } ?> 
             
           </a>
           <ul class="dropdown-menu text-small">
             <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
            

             <li>
               <hr class="dropdown-divider">
             </li>

             <li><a class="dropdown-item" href="logout.php">Sair</a></li>
           </ul>
        </div>            
      </ul>
    </div>

    <div class="hamburger-icon">&#9776;</div>

    <!-- Adicione o off-canvas menu -->
    <div class="off-canvas">
      <ul class="nav">
        <div class="close-button" onclick="closeOffCanvas()">&#10006;</div>
        <hr>
        <div class="dropdown text-end">
        <?php if ($_SESSION['imgCliente']==null) { ?>
              <img src="./../img/user/logo.jpg" alt="mdo"  width="100" height="100" class="rounded-circle">
             <?php } else { ?>
              <img src="./../img/user/<?php echo $_SESSION['imgCliente']?>" alt="mdo"  width="100" height="100" class="rounded-circle">
            <?php } ?>            </a>
        </div>       
          <li><a href="perfil.php" class="nav-link text-white" >Perfil</a></li>
          <li><a href="home.php" class="nav-link  text-white">Home</a></li>
          <li><a href="produtos.php" class="nav-link  text-white">Produtos</a></li>
          <li><a href="sobre.php" class="nav-link  text-white">Quem Somos</a></li>
          <li><a href="#footer" class="nav-link  text-white">Fale conosco</a></li>
          <li><a class="dropdown-item" href="logout.php">Sair</a></li>
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


