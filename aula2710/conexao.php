<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "juio"
);

if (!$conn) {
    die("Falha na conexao: " . mysqli_connect_error());
}

?>