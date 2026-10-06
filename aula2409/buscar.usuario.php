<?php

session_start();
require ("config.php");
require ("conexao.php");
require ("config-usuario.php");

echo criarTopo(1);


$id = $_GET["id"];
$usuario = buscarUsuario($id, $conn);
if ($usuario != "") {

    $idUsuario = $usuario["id"];
    $emailUsuario = $usuario["email"];
    $senhaUsuario = $usuario["senha"];

    echo formularioEdicao($idUsuario, $emailUsuario, $senhaUsuario);
}

echo criarRodape("");
?>
