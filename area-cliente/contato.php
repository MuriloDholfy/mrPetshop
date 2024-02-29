<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MR PetShop - Contato</title>
  <link rel="short icon" href="./../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon Booststrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
      <?php 
        include('./../componentes/header-cliente-logado.php');
      ?>
  <div class="container-fluid  container00 container04 ">
    <div class="container">

      <div class="container " style="height: 70vh; ">
        <div class="card w-75 shadow  " style=" opacity:0.9; margin: 0 auto">
          <div class="card-header text-center ">
            <h1 class="display-5">Contato</h1>
          </div>
          <div class="card-body">
          <form action="#" class="">
                            <div class=" mb-3 me-4 d-flex">
                             <div class="me-3 col-xl-6 col-lg-4 ">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                             </div>
                             <div class="me-3 col-xl-6 col-lg-4 ">
                                <label for="exampleFormControlInput1" class="form-label ">Email address</label>
                                <input type="email" class="form-control " id="exampleFormControlInput1" placeholder="name@example.com">
                             </div>
                            </div>
                            <div class=" mb-3 me-4">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                             </div>
                            <div class="mb-3 me-3">
                                <label for="exampleFormControlTextarea1" class="form-label ">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>   
                            <div >  
                            <button type="button" class="btn btn-outline-light">Enviar</button>
                            </div>
                        </form>
          </div>
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
</body>

</html>