<?php

require("conexao.php");
require("config-usuario.php");

$idAntigo = $_GET["idAntigo"];

$idNovo = $_POST["id"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$resultado = editarUsuario(
    $idAntigo,
    $idNovo,
    $email,
    $senha,
    $conn
);

if ($resultado) {

    header(
        "Location: lista_usuario.php?tipo=1&mensagem=Edição do usuário id [$idAntigo] realizada com sucesso!"
    );

} else {

    header(
        "Location: lista_usuario.php?tipo=0&mensagem=Erro durante a edição do usuário"
    );
}

mysqli_close($conn);

?>