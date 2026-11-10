<?php

require("config.postagem.php");

$id = $_GET["id"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];

$postagem = buscarPostagem($id, $conn);

if ($postagem != "") {
    $dta = $postagem["dta"];
    $idUsuario = $postagem["idUsuario"];

    $resultado = atualizarPostagem($id, $titulo, $descricao, $dta, $idUsuario, $conn);

    if ($resultado) {
        header("Location: listar_postagem.php?tipo=1&mensagem=Edição da postagem id [$id] realizada com sucesso!");
    } else {
        header("Location: listar_postagem.php?tipo=0&mensagem=Erro durante a edição da postagem");
    }
} else {
    header("Location: listar_postagem.php?tipo=0&mensagem=Postagem não encontrada");
}

mysqli_close($conn);

?>
