<?php

session_start();
require ("config.php");
require ("conexao.php");
require ("config-usuario.php");

echo formularioEdicao($idUsuario, $emailUsuario, $senhaUsuario);

$id = $_GET["id"];
$usuario = buscarUsuario($id, $conn);
if ($usuario != "") {
    echo "Usuario Encontrado! ID: ".$usuario["id"]. " com o email: ".$usuario["email"];
}
?>

