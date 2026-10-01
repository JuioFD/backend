<?php
require('conexao.php');

$id = $_GET["id"];

$sql = "DELETE FROM usuarios WHERE `usuarios`.`id` = $id";

$resultado = mysqli_query($conn, $sql);

if($resultado) 
{
    echo "Deleção realizada com sucesso";
} else {
    echo "Erro durante a deleção: ". mysqli_error();
}

mysqli_close($conn);
