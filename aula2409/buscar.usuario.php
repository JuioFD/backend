<?php

require ("config.php");
require ("conexao.php");
require ("config-usuario.php")

$id = $_GET["id"];
$usuario = buscarUsuario($id, $conn));
if ($usuario != "") {
    echo "Usuario Encontrado! ".$usuario[$id]. " com o email: ".$usuario["email"];
}
?>