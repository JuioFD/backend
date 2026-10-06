<?php

function buscarUsuario ($id) {
    global $conn;

$dados = "";
$sql = "SELECT * FROM usuarios WHERE id=$id";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) > 0 ) {
    $dados = mysqli_fetch_assoc($resultado);
    print_r($dados);
}
return $dados;
}