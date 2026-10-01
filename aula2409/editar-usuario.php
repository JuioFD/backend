<?php
require('conexao.php');

$id = 3;
$email = "1111111111111oi2email";
$senha = "11111111111oi2senha";

$sql = "UPDATE `usuarios` SET `email` = '$email', `senha` = '$senha' WHERE `usuarios`.`id` = $id";

$resultado = mysqli_query($conn, $sql);

if($resultado) 
{
    echo "Edição realizada com sucesso";
} else {
    echo "Erro durante a edição: ". mysqli_error();
}

mysqli_close($conn);