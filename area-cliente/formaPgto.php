<!DOCTYPE html>
<html>
<?php
  require_once '../dao/ProdutoDao.php';
  $produtos = ProdutoDao::selectAll();

?>
<head>
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <meta name="viewport" content="width=auto">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-mask/1.8.5/mask.min.js"></script>
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="../css/formaPgto.css">
</head>

<body ng-app="paymentForm">

    
    <!-- Modal Container -->
    <div id="paymentModal" class="modal">
        <div class="modal-content">
            <?php foreach($produtos as $produto) { ?>
            <div class="container">
                <div class="back-panel">
                    <h1 class="card-type">MRPETSHOP</h1>
                    <div class="order-total">
                        <div class="product-title"><?=$produto[1]?></div>
                        <div class="product-price">
                            <span> order total</span>
                            <div class="price">
                                <span><?=$produto[2]?></span>
                            </div>
                        </div>
                    </div>
                    <div class="save-confirm">
                        <input type="checkbox" name="safe" id="safe-field" checked>
                        <label for="safe-field">Salvar Informações ?</label>
                    </div>
                    <div class="input-container">
                        <section class="input-wrapper">
                            <div class="product-info-wrapper">
                                <div class="product-info">
                                    <p> Finalizando a Compra</p>
                                    <img src="../img/produtos/produto10.png">
                                    <div class="product-reviews">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <p class="reviews">Avaliação </p>
                                </div>
                            </div>
                            <div class="payment-form-wrapper">
                                <h1 class="small-card-type">visa</h1>
                                <form class="payment-form">
                                    <div class="cardholder">
                                        <label> Nome Completo
                                            <input value="" />
                                        </label>
                                    </div>
                                    <div class="card-number">
                                        <label class="">Numero do Cartão
                                            <input type="text" name="credit-card" ng-model="cardNumber"
                                                ui-mask=" 9999 - 9999 - 9999 - 9999" />
                                        </label>
                                    </div>
                                    <div class="expires">
                                        <label class="month"> Vencimento
                                            <select>
                                                <option>Janeiro </option>
                                                <option>Fevereiro</option>
                                                <option>Março </option>
                                                <option>Abril </option>
                                                <option>Maio </option>
                                                <option>Junho </option>
                                                <option>Julho </option>
                                                <option>Agosto </option>
                                                <option>Setembro </option>
                                                <option>Outubro </option>
                                                <option>Novembro </option>
                                                <option>Dezembro </option>
                                            </select>
                                        </label>
                                        <label class="year">
                                            <select>
                                                <option>2023</option>
                                                <option>2024</option>
                                                <option>2025</option>
                                                <option>2026</option>
                                                <option>2027</option>
                                                <option>2028</option>
                                                <option>2029</option>
                                                <option>2030</option>
                                            </select>
                                        </label>
                                        <label class="ccv"> ccv
                                            <input ui-mask="999" ng-model="ccv" />
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <button class="buy-btn"> Comprar</button>
                        </section>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- Include necessary scripts for modal functionality -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-mask/1.8.5/mask.min.js"></script>
    <script src="../js/modal.js"></script>
   
    <script>
      // modal.js
document.addEventListener("DOMContentLoaded", function () {
    var openModalBtn = document.getElementById("openModalBtn");
    var paymentModal = document.getElementById("paymentModal");

    openModalBtn.addEventListener("click", function () {
        paymentModal.style.display = "block";
    });

    window.addEventListener("click", function (event) {
        if (event.target === paymentModal) {
            paymentModal.style.display = "none";
        }
    });
});

    </script>
</body>

</html>
