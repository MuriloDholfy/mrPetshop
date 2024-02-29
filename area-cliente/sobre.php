<?php 
  session_start(); 
?>

<!DOCTYPE html>
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
  
</head>

<body style="justify-content: center; align-items: center; height: 100vh ; background-color: #202020; ">
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

  <div class="container00 container03 d-flex justify-content-center align-items-center h-100">
    <!-- Seção sobre a empresa MR PetShop -->
    <div class="caixa">
      <h2 class="text-center text-white">Bem-vindo à MR PetShop</h2>
      <video width="100%" height="auto" controls>
        <source src="../img/site/pet.mp4">
      </video>

    </div>
    <div class="caixa2">
      <h2 class="text-center text-white">Bem-vindo à MR PetShop</h2>
      
          <div class="container  column justify-content-center align-items-center h-100 ">
            <p class="text-center  text-white">
            Bem-vindo ao MR PetShop, onde o amor 
            pelos animais encontra um lar! Desde nossa humilde origem, 
            nos dedicamos a proporcionar o melhor para os seus amados pets. 
            Nossa jornada começou com a paixão por animais e cresceu para se 
            tornar um refúgio para todos os amantes de pets. Aqui, não vendemos apenas produtos, criamos laços e
            cuidamos de cada cauda, penugem e patinha que entra pela nossa porta.
            </p>
            <p class="text-center text-white">
            No MR PetShop, não apenas 
            vendemos produtos para animais de estimação; moldamos 
            experiências. Em cada sacola, há uma promessa de qualidade, 
            cuidado e amor dedicados aos seus bichinhos. Somos uma equipe 
            de amantes de animais, treinados para orientar você na escolha 
            certa para seus pets. Desde rações premium a brinquedos divertidos, estamos 
            aqui para tornar cada momento com seu pet especial e memorável.
            </p>
            <p class="text-center text-white">
            MR PetShop não é apenas um lugar para 
            comprar. É um lar para todos os animais de estimação. Fundado 
            por entusiastas de animais, nossa história é tecida com risos de 
            filhotes, ronronares de gatinhos e o amor incondicional que só os 
            animais podem proporcionar. Convidamos você a entrar em nosso mundo,
            onde cada compra ajuda a sustentar nosso compromisso de criar
            uma comunidade onde pets e pessoas se unem em harmonia e felicidade.
            </p>
          </div>
    </div>
    
    <!-- Fim da seção sobre a empresa MR PetShop -->
  </div>

  <?php 
    include('./../componentes/footer-cliente.php');
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    // Oculta a caixa inicialmente
    document.querySelector(".caixa").style.display = "none";

    // Aguarda 1,5 segundos antes de exibir a caixa
    setTimeout(function() {
      document.querySelector(".caixa").style.display = "block";
    }, 1500); // 1500 milissegundos (1,5 segundos)
  });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
      var video = document.querySelector("video");
      var caixa2 = document.querySelector(".caixa2");

      // Adiciona um ouvinte para o evento de pausa do vídeo
      video.addEventListener("pause", function () {
        caixa2.style.display = "block";
      });

      // Adiciona um ouvinte para o evento de play do vídeo
      video.addEventListener("play", function () {
        caixa2.style.display = "none";
      });
    });
  </script>

</body>

</html>
