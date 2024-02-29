<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel ADM</title>
  <link rel="short icon" href="./../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body style=" justify-content: center; align-items: center; height: 100vh;  ">
  <div class="container card col-xl-10 col-xxl-8" >
    <div class="row align-items-center g-lg-5 py-4">
      <div class="col-lg-7 text-center text-lg-start">
      <a href="../area-cliente/home.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="./../img/site/logo2.png" class="rounded mx-auto d-block" alt="..." style="width:40%" >
      </a>
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3 text-center">MR PetShop</h1>
        <p class="col-lg-10 fs-5 text-center w-100 display-4 fw-bold lh-1">Painel Adminstrativo</p>
        <p class="col-lg-10 fs-5 text-center w-100 display-4  lh-1">*Clique na logo para voltar</p>
        

      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border bs-tertiary-color" method="post" action="home">
          <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3 text-center">Login</h1>
          <div class="form-floating mb-3">
            <input type="text" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating ">
            <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="checkbox mt-3 mb-2">
            <label>
              <input type="checkbox" value="remember-me"> Lembre de mim
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Logar</button>
          <hr class="my-4">
          <small class="text-body-secondary">Ao clicar em Cadastre-se, você concorda com os termos de uso.</small>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

body{
  background-image: url("../img/site/filhote-de-cachorro-fofo-brincando-ao-ar-livre-olhando-para-a-camera-com-estado-de-alerta-gerado-pela-inteligencia-artificial.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    
}


.container{
  border-bottom: 1px solid #25222bea;
    border-radius: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35) ;
    position: relative;
    overflow: hidden;
    height: 95vh; 
    padding:8% 30px; 
    
    
}
  </style>
</html>