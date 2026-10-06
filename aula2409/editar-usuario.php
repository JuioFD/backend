<?php

require("conexao.php");
require("config-usuario.php");

$idAntigo = $_GET["idAntigo"];
$idNovo = $_POST["id"];
$email = $_POST["email"];
$senha = $_POST["senha"];

if (editarUsuario($idAntigo, $idNovo, $email, $senha)) {

    header("Location: lista_usuario.php?tipo=1&mensagem=Usuario editado com sucesso");

} else {

    header("Location: lista_usuario.php?tipo=0&mensagem=Erro ao editar usuario");
}

mysqli_close($conn);

?>