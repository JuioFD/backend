<?php
include 'config.php';

session_start();

print_r($_POST);
$login = $_POST['login'];
$senha = $_POST['senha'];

if ($login == "admin" && $senha == "123") {
    echo "acesso liberado";
    $_SESSION['logado'] = 1;
    $_SESSION['nome'] = $login;
}
else {
    echo "errou";
    $_SESSION['logado'] = 0;
}

?>