<?php
require('conexao.php');

$id = $_POST["id"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "UPDATE `usuarios` SET `email` = '$email', `senha` = '$senha' WHERE `usuarios`.`id` = $id";

$resultado = mysqli_query($conn, $sql);

if($resultado) 
{
    echo "Edição realizada com sucesso";
} else {
    echo "Erro durante a edição: ". mysqli_error();
}

mysqli_close($conn);