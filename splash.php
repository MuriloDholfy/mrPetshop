<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splash Screen</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        body {
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #DE7300;
    
}

.splash-container {
    text-align: center;
}

.logo {
    margin-left: 20px;
    height: 250px;
    width: 250px; /* ajuste conforme necessário */
}

.loading-animation {
    
    border: 4px solid white;
    border-top: 4px solid transparent;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    animation: spin 1s linear infinite;
    margin: 30px auto;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

    </style>
</head>
<body>
    <div class="splash-container">
        <img src="./img/site/logo.png" alt="Logo" class="logo">
        <div class="loading-animation"></div>
    </div>
    <script src="script.js"></script>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Simular um tempo de carregamento (pode ser substituído por uma chamada AJAX, por exemplo)
    setTimeout(function() {
        // Redirecionar ou fazer qualquer ação após o carregamento
        window.location.href = "./area-cliente/home.php";
    }, 3000); // 3000 milissegundos (3 segundos) - ajuste conforme necessário
});

</script>
</html>
