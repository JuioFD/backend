<?php

session_start();
require("conexao.php");

function cadastrarPostagem ($titulo, $descricao, $idUsuario, $conn) {
     $sql = "INSERT INTO postagens (titulo, descricao, dta, idUsuario) VALUES ('$titulo', '$descricao', NOW(), $idUsuario)";

     $resultado = mysqli_query($conn, $sql);

     return $resultado;
}

cadastrarPostagem("Aprendendo PHP", "descricao php", 3, $conn);

?>