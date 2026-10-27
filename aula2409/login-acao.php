<?php 
session_start();

$nome = $_POST['login'];
$senha = $_POST['senha'];
$senha_cript = md5($senha);

if ($nome == "admin" && $senha_cript == "202cb962ac59075b964b07152d234b70") {
    $_SESSION["logado"] = 1;
    $_SESSION["nome"] = $nome;

    header("Location: perfil.php");
} else {
    $_SESSION["logado"] = 0;
    header("location: login.php?mensagem=Errou a senha ou login&tipo=0");
}

?>