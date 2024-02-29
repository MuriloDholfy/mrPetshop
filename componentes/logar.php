<?php
$usuario_logado = true; 

if ($usuario_logado) {
    include('header_cliente_logado.php'); 
} else {
    include('header_nao_logado.php');
}
?>