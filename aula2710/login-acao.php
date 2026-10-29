<?php

session_start();

include("conexao.php");
include("config-usuario.php");

$nome = $_POST["login"];
$senha = $_POST["senha"];
$senha_cript = md5($senha);

$usuario = buscarLogin($nome, $senha_cript, $conn);

if ($usuario != "") {
    $_SESSION["logado"] = 1;
    $_SESSION["nome"] = $usuario["email"];

    header("Location: perfil.php?tipo=1&mensagem=Login realizado com sucesso!");
} else {
    $_SESSION["logado"] = 0;

    header("Location: login.php?tipo=0&mensagem=Usuário ou senha incorretos.");
}

mysqli_close($conn);

?>
