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

    echo "Usuario Encontrado! ID: ".$usuario["id"]. " com o email: ".$usuario["email"];

    echo formularioEdicao($idUsuario, $emailUsuario, $senhaUsuario);
}
?>

