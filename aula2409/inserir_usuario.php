<?php

include "conexao.php";

$email = "dossifutebol@gmail.com";
$senha ="1234";

$sql = "INSERT INTO usuarios (email, senha)
        VALUES ('$email', '$senha')";
    
if (mysqli_query($conn, $sql)) {
    echo "usuario cadastrado com sucesso!";
} else {
    echo "erro ao cadastrar usuario: " . mysqli_error($conn);
}

mysqli_close($conn);
?>