
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


document.getElementById('registerBtn').addEventListener('click', function () {
  var container = document.querySelector('.container');

  // Verificar a largura da tela
  var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

  // Aplicar o efeito apenas se a largura da tela for menor que 800 pixels
  if (windowWidth < 800) {
    container.classList.toggle('active');
  }
});



document.getElementById('register2').addEventListener('click', function () {
  var container = document.querySelector('.container');

  // Verificar a largura da tela
  var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

  // Aplicar o efeito apenas se a largura da tela for menor que 800 pixels
  if (windowWidth < 800) {
    container.classList.toggle('active');
  }
});



const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');
const formSignUp = document.querySelector('.form-container.sign-up');
const formSignIn = document.querySelector('.form-container.sign-in');

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

registerBtn.addEventListener('click', () => {
  togglePanel('sign-in');
});

document.getElementById('register2').addEventListener('click', () => {
  togglePanel('sign-up');
});

document.getElementById('register3').addEventListener('click', () => {
  togglePanel('sign-in');
});

loginBtn.addEventListener('click', () => {
  togglePanel('sign-in');
});

function handleWidthChange() {
  var button = document.getElementById('register2');
  var isSmallScreen = window.innerWidth < 800;

  button.classList.toggle('hidden2', !isSmallScreen);
  button.classList.toggle('fade-in', isSmallScreen);
  button.classList.toggle('fade-out', !isSmallScreen);
  button.style.zIndex = isSmallScreen ? '' : '-1000';
}

// Adicione um ouvinte de evento para a mudança de largura
window.addEventListener('resize', handleWidthChange);

// Chame a função no carregamento da página para configurar inicialmente
window.addEventListener('load', handleWidthChange);

function togglePanel(panel) {
  const container = document.getElementById('container');
  const formSignUp = document.querySelector('.form-container.sign-up');
  const formSignIn = document.querySelector('.form-container.sign-in');

  container.classList.toggle('active');

  if (panel === 'sign-up') {
    formSignUp.classList.remove('hidden', );
    formSignIn.classList.add('hidden');

    if (window.innerWidth < 800) {
      formSignUp.style.transform = 'translateX(0%)';
    } else {
      formSignUp.style.transform = 'translateX(100%)';
    }
  } else if (panel === 'sign-in') {
    formSignUp.classList.add('hidden');
    formSignIn.classList.remove('hidden');
  }
}

// Adicione este trecho para desativar a animação do botão 'Registrar' ao pressionar 'Entrar'
document.getElementById('register2').addEventListener('click', function () {
  togglePanel('sign-in');

  // Desativar a animação do botão 'Registrar' removendo a classe 'fade-in'
  var registerButton = document.getElementById('register3');
  registerButton.classList.remove('fade-in');
});
