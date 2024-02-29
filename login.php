<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MR PetShop - Login</title>
  <link rel="short icon" href="./../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/loginStyle.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body style="justify-content: center; align-items: center; height: 100vh;" class="bg-dark">
  <div class="container" id="container">
    <div class="form-container sign-up active">
      <form>
        <a href="home.php" class="icons"><i class="fas fa-arrow-left"></i> Voltar para Home</a>
        <h1>Crie sua conta</h1>
        <div class="social-icons">
          <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>Use suas informações pessoais para o registro</span>

        <!-- Dividir o formulário em duas colunas -->
        <div style="display: flex; justify-content: space-between;">

          <!-- Coluna 1 -->
          <div style="width: 48%;">
            <input type="text" placeholder="Nome">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Senha">
            <input type="text" placeholder="CPF">
            <input type="date" placeholder="Data de Nascimento">
          </div>

          <!-- Coluna 2 -->
          <div style="width: 48%;">
            <input type="text" placeholder="Logradouro">
            <input type="text" placeholder="Número Logradouro">
            <input type="text" placeholder="CEP">
            <input type="text" placeholder="Bairro">
            <input type="text" placeholder="Cidade">
          </div>
        </div>

        <!-- Centralizar o campo Complemento -->
        <div style="width: 40%; text-align: center;">
          <input type="text" placeholder="Complemento">
        </div>
        <div class="d-flex">
          <button type="submit" class="m-1 p-2">Confirmar</button>
          <button type="button" style="z-index: index 2;"class="hidden2 register2 m-1 p-2 entrar" id="register2" name="register2">Entrar</button>
        </div>
      </form>
    </div>
    <div class="form-container sign-in active">
      <form>
        <a href="home.php" class="icons"><i class="fas fa-arrow-left"></i> Voltar para Home</a>
        <h1>Entrar</h1>
        <div class="social-icons">
          <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>

        <span>Entre com seu Email e Senha</span>
        <div style="width: 48%;">
          <input type="email" placeholder="Email">
          <input type="password" placeholder="Senha">
        </div>
        <a href="#">Esqueceu sua Senha?</a>
          <button type="submit" class="m-3">Confirmar</button>
          <button type="button" class="register3 m-3 registrar" id="register3" name="register3">Registrar-se</button>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Bem vindo</h1>
          <p>Entre com as suas informações pessoais</p>
          <button class="hidden" id="entrar" onclick="togglePanel()">Entrar</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Ola de Novo, Amigo!</h1>
          <p>Cadastre-se para aproveitar melhor todos os recursos do nosso site</p>
          <button class="hidden" id="register">Registrar-se</button>
        </div>
      </div>
    </div>
    <script>
      // Função para verificar a largura da tela e atualizar a classe do botão
      function updateButtonVisibility() {
        var button = document.getElementById('register3');
        var isSmallScreen = window.innerWidth < 800;

        // Adiciona ou remove a classe 'hidden2' com base na largura da tela
        button.classList.toggle('hidden2', !isSmallScreen);

        // Adiciona ou remove a classe de animação 'fade-in' ou 'fade-out'
        button.classList.toggle('fade-in', isSmallScreen);
        button.classList.toggle('fade-out', !isSmallScreen);

        // Define o z-index com base na largura da tela
        button.style.zIndex = isSmallScreen ? '' : '-1000';
      }

      // Chame a função inicialmente para configurar a classe com base na largura inicial da tela
      updateButtonVisibility();

      // Adicione um ouvinte de evento de redimensionamento da janela para atualizar a classe quando a largura da tela mudar
      window.addEventListener('resize', updateButtonVisibility);
    </script>
<script>
  const container = document.getElementById('container');
  const registerBtn = document.getElementById('register');
  const formSignUp = document.querySelector('.form-container.sign-up');
  const formSignIn = document.querySelector('.form-container.sign-in');

  registerBtn.addEventListener('click', () => {
    togglePanel('sign-in');
  });

  document.getElementById('register3').addEventListener('click', () => {
    togglePanel('sign-in');
  });

  function togglePanel(panel) {
    container.classList.toggle('active');

    if (panel === 'sign-up') {
      formSignUp.classList.remove('hidden');
      formSignIn.classList.add('hidden');
    } else if (panel === 'sign-in') {
      formSignUp.classList.add('hidden');
      formSignIn.classList.remove('hidden');
    }
  }
</script>
    <script>
      const container = document.getElementById('container');
      const registerBtn = document.getElementById('register');
      const loginBtn = document.getElementById('login');
      const formSignUp = document.querySelector('.form-container.sign-up');
      const formSignIn = document.querySelector('.form-container.sign-in');

      registerBtn.addEventListener('click', () => {
        togglePanel('sign-up');
      });

      loginBtn.addEventListener('click', () => {
        togglePanel('sign-in');
      });

      document.getElementById('register2').addEventListener('click', () => {
        togglePanel('sign-up');
      });
      document.getElementById('register2').addEventListener('click', () => {
        togglePanel('sign-in');
      });

      function togglePanel(panel) {
        container.classList.toggle('active');

        if (panel === 'sign-up') {
          formSignUp.classList.remove('hidden');
          formSignIn.classList.add('hidden');
        } else if (panel === 'sign-in') {
          formSignUp.classList.add('hidden');
          formSignIn.classList.remove('hidden');
        }
      }

      function handleWidthChange() {
        // Adicione aqui a lógica para a mudança de largura, se necessário
      }

      // Adicione um ouvinte de evento para a mudança de largura
      window.addEventListener('resize', handleWidthChange);

      // Chame a função no carregamento da página para configurar inicialmente
      window.addEventListener('load', handleWidthChange);
    </script>

    <script>
      // Função para verificar a largura da tela e atualizar a classe do botão
      function updateButtonVisibility() {
        var button = document.getElementById('register2');
        if (window.innerWidth < 800) {
          // Se a largura da tela for menor que 800, remova a classe 'hidden2'
          button.classList.remove('hidden2');
        } else {
          // Se a largura da tela for maior ou igual a 800, adicione a classe 'hidden2'
          button.classList.add('hidden2');
        }
      }

      // Chame a função inicialmente para configurar a classe com base na largura inicial da tela
      updateButtonVisibility();

      // Adicione um ouvinte de evento de redimensionamento da janela para atualizar a classe quando a largura da tela mudar
      window.addEventListener('resize', updateButtonVisibility);
    </script>
    <script>
      
    </script>
    <script>
  const container = document.getElementById('container');
  const registerBtn = document.getElementById('register');
  const loginBtn = document.getElementById('login');
  const formSignUp = document.querySelector('.form-container.sign-up');
  const formSignIn = document.querySelector('.form-container.sign-in');

  registerBtn.addEventListener('click', () => {
    togglePanel('sign-up');
  });

  loginBtn.addEventListener('click', () => {
    togglePanel('sign-in');
  });

  function togglePanel(panel) {
    container.classList.toggle('active');

    if (panel === 'sign-up') {
      formSignUp.classList.remove('hidden');
      formSignIn.classList.add('hidden');
    } else if (panel === 'sign-in') {
      formSignUp.classList.add('hidden');
      formSignIn.classList.remove('hidden');
    }
  }
</script>
<script>
  function togglePanel(panel) {
    container.classList.toggle('active');

    if (panel === 'sign-up') {
      formSignUp.classList.remove('hidden');
      formSignIn.classList.add('hidden');

      // Verificar se a largura da tela é menor que 800 para aplicar a transformação
      if (window.innerWidth < 800) {
        .container.active .sign-up{
        formSignUp.style.transform = 'translateX(0%)';
        formSignUp.style.opacity = '1';
        formSignUp.style.zIndex = '5';
        formSignUp.style.animation = 'move 0.6s';
      }
      } else {
        // Se a largura da tela for maior ou igual a 800, aplicar as propriedades originais
        .container.active .sign-up{
        formSignUp.style.transform = 'translateX(100%)';
        formSignUp.style.opacity = '1';
        formSignUp.style.zIndex = '5';
        formSignUp.style.animation = 'move 0.6s';
      }
      }
    } else if (panel === 'sign-in') {
      formSignUp.classList.add('hidden');
      formSignIn.classList.remove('hidden');
    }
  }
</script>
<script>document.getElementById('registerBtn').addEventListener('click', function() {
    var container = document.querySelector('.container');
    
    // Verificar a largura da tela
    var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    // Aplicar o efeito apenas se a largura da tela for menor que 800 pixels
    if (windowWidth < 800) {
        container.classList.toggle('active');
    }
});</script>
<script>document.getElementById('register2').addEventListener('click', function() {
    var container = document.querySelector('.container');
    
    // Verificar a largura da tela
    var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    // Aplicar o efeito apenas se a largura da tela for menor que 800 pixels
    if (windowWidth < 800) {
        container.classList.toggle('active');
    }
});</script>

  </div>
</body>

</html>
