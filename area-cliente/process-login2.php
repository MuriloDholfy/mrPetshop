<?php
require_once __DIR__.'../../model/Conexao.php';

// Assuming you have a database connection established
$host = "localhost";
$username = "root";
$password = "";
$database = "bdmrpetshop";


$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["emailCliente"];
    $password = $_POST["passwordCliente"];

    $sql = "SELECT * FROM tbcliente WHERE emailCliente = '$email' AND passwordCliente = '$password'";
    $result = mysqli_query($conn, $sql);

    // ... (seu código de verificação de login)
    if (mysqli_num_rows($result) == 1) {
    $cliente = mysqli_fetch_assoc($result);

    // Armazena informações do cliente na sessão
    session_start();
    $_SESSION['codCliente'] = $cliente['codCliente'];
    $_SESSION['nomeCliente'] = $cliente['nomeCliente'];
    $_SESSION['cpfCliente'] = $cliente['cpfCliente'];
    $_SESSION['dataNascCliente'] = $cliente['dataNascCliente'];
    $_SESSION['numLogradCliente'] = $cliente['numLogradCliente'];
    $_SESSION['cepCliente'] = $cliente['cepCliente'];
    $_SESSION['bairroCliente'] = $cliente['bairroCliente'];
    $_SESSION['cidadeCliente'] = $cliente['cidadeCliente'];
    $_SESSION['complementoCliente'] = $cliente['complementoCliente'];
    $_SESSION['emailCliente'] = $cliente['emailCliente'];
    $_SESSION['passwordCliente'] = $cliente['passwordCliente'];
    $_SESSION['imgCliente'] = $cliente['imgCliente'];
    $_SESSION['tokenCliente'] = $cliente['tokenCliente'];
    // ... (outras informações do cliente que deseja armazenar)

    // Redireciona para a home
    header("Location: home.php");
    exit();
}
         else {
        // Invalid credentials
        echo '<script>
        alert("Senha ou Email invalido");
        window.location.href = "login.php";
        </script>';
    }

    mysqli_close($conn);
}
?>


