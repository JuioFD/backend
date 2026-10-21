<?php

require("conexao.php");
require("config-usuario.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$resultado = inserirUsuario(
    $email,
    $senha,
    $conn
);

if ($resultado) {
    header(
        "Location: cadastrar-usuario.php?tipo=1&mensagem=Usuário cadastrado com sucesso"
    );

} else {
    header(
        "Location: cadastrar-usuario.php?tipo=0&mensagem=Erro no cadastro do usuário"
    );
}

mysqli_close($conn);

?>