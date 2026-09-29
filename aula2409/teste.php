<?php

session_start();
include 'config.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

if ($login == "admin" && $senha == "123") {
    
    $_SESSION['logado'] = 1;
    $_SESSION['nome'] = $login;

    $_SESSION['tipo'] = 1;
    $_SESSION['mensagem'] = "Login realizado com sucesso!";

    header("Location: perfil.php");
}
else {
    $_SESSION['logado'] = 0;

    $_SESSION['tipo'] = 0;
    $_SESSION['mensagem'] = "Usuario ou senha incorretos.";

    header("Location: login.php");
}
?>