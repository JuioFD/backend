<?php

session_start();

require("config.php");
require("conexao.php");
require("config-usuario.php");

$logado = @$_SESSION["logado"];

paginaRestrita(
    $logado,
    "login.php",
    "Para editar usuários é necessário ter acesso."
);

$id = $_GET["id"];

$usuario = buscarUsuario(
    $id,
    $conn
);

echo criarTopo($logado);

if ($usuario != "") {

    echo formularioEdicao(
        $usuario["id"],
        $usuario["email"],
        $usuario["senha"]
    );
}

echo criarRodape();
mysqli_close($conn);
?>