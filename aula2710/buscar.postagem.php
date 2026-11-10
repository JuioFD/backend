<?php

session_start();

require("config.php");
require("conexao.php");
require("config.postagem.php");

$logado = @$_SESSION["logado"];

paginaRestrita(
    $logado, "login.php", "Para editar postagens é necessário ter acesso."
);

$id = $_GET["id"];

$postagem = buscarPostagem($id, $conn);

if ($postagem != "") {
    echo criarTopo($logado);
    verificaMensagem();
    echo formularioEdicaoPostagem(
        $postagem["id"],
        $postagem["titulo"],
        $postagem["descricao"]
    );

    echo criarRodape();
} else {
    header("Location: listar_postagem.php?tipo=0&mensagem=Postagem [$id] nao foi encontrada");
}

mysqli_close($conn);

?>
