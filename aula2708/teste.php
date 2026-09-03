<?php

session_start();
include 'config.php';

print_r($_POST);
$login = $_POST['login'];
$senha = $_POST['senha'];

if ($login == "admin" && $senha == "123") {
    echo "acesso liberado";
    $_SESSION['logado'] = 1;
    $_SESSION['nome'] = $login;

    header("Location: perfil.php");
}
else {
    header("Location: login.php?mensagem=errou a senha ou o login&tipo=0");

    $_SESSION['logado'] = 0;
    
}
?>