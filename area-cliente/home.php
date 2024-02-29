<!DOCTYPE html>
<html lang="pt-br">

<?php 
  session_start(); 
?>
  
  


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MR PetShop - Home</title>
  <link rel="short icon" href="./../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
  <style>
    .hidden-text {
      opacity: 0; 
      transform: translateY(20px);
      transition: opacity 1s, transform 1s;
    }

    .visible-text {
      opacity: 1;
      transform: translateY(0);
    }
    
  </style>
</head>

<body style="justify-content: center; align-items: center; height: 100vh">
<?php 

//Verifica se o cliente está autenticado
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


  <div class="container-fluid container00 container01">
    <div class="container">
    </div>
    <div class="container titlePadding hidden-text" data-aos="fade-down" data-aos-duration="1500">
      <p class="h5" id="lauchComing">MR PetShop</p>
      <p class="h1">O Melhor para o seu Pet.</p>
      <div class="text-center d-flex justify-content-center align-items-end position-absolute">
        <a href="#bemvindo" class="icons"><i class="fas fa-arrow-down"></i> Bem Vindo</a>
      </div>
    </div>
  </div>

  <div class="container-fluid container00 container02">
    <div class="container titlePadding hidden-text" data-aos="fade-down" data-aos-duration="1500" id="bemvindo">
      <p class="h1 p-3">Bem-vindo à MR Pet Shop - Seu Destino de Confiabilidade e Carinho para Seu Amado Pet!</p>
      <p class="h5 p-3" id="lauchComing">Na MR Pet Shop, entendemos que seu animal de estimação é mais do que apenas um bichinho - ele é um membro querido da sua família. Nosso compromisso vai além de oferecer produtos e serviços de alta qualidade; é sobre proporcionar atenção e cuidado genuínos para o seu pet. Afinal, sabemos que ele merece nada menos que o melhor.</p>
    </div>
  </div>
  <?php
// Simule uma variável $loginSucesso após verificar o login bem-sucedido
$loginSucesso = true;

// Após verificar o login bem-sucedido
if ($loginSucesso) {
    echo '<script type="text/javascript">
            $(document).ready(function(){
              $("#bemVindoModal").modal("show");
            });
          </script>';
}
?>

<!-- Adicione o Modal no final do seu corpo HTML -->
<div class="modal fade" id="bemVindoModal" tabindex="-1" aria-labelledby="bemVindoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bemVindoModalLabel">Bem-vindo de volta!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Bem-vindo de volta, <?php echo $_SESSION['nomeCliente']; ?>!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
    
  <?php include('./../componentes/footer-cliente.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible-text");
          }
        });
      });

      const elements = document.querySelectorAll(".hidden-text");
      elements.forEach(element => {
        observer.observe(element);
      });
    });
  </script>

</body>

</html>
