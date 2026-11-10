<?php

session_start();

require("config.php");
require("conexao.php");

$logado = @$_SESSION["logado"];

paginaRestrita(
    $logado, "login.php", "Necessário ter acesso para cadastrar postagem."
);

function cadastrarPostagem($titulo, $descricao, $idUsuario, $conn) {
    $sql = "INSERT INTO postagem (titulo, descricao, dta, idUsuario) VALUES ('$titulo', '$descricao', NOW(), $idUsuario)";

    $resultado = mysqli_query($conn, $sql);

    return $resultado;
}

if ($logado == 1) {
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $idUsuario = $_SESSION["id"];
    $resultado = cadastrarPostagem($titulo, $descricao, $idUsuario, $conn);

    if ($resultado) {
        header("Location: listar_postagem.php?tipo=1&mensagem=Postagem cadastrada com sucesso");
    } else {
        header("Location: cadastrar-postagem.php?tipo=0&mensagem=Erro no cadastro da postagem");
    }
}

mysqli_close($conn);

?>
