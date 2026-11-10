<?php

session_start();

require("config.php");
require("conexao.php");
require("config.postagem.php");

paginaRestrita(@$_SESSION["logado"], "login.php", "Para deleção é necessário estar logado.");

$id = $_GET["id"];
$resultado = deletarPostagem($id, $conn);

if ($resultado) {
    header("Location: listar_postagem.php?tipo=1&mensagem=Deleção da Postagem id [$id] realizada com sucesso!");
} else {
    echo "Erro durante a deleção: " . mysqli_error($conn);
}

mysqli_close($conn);

?>

