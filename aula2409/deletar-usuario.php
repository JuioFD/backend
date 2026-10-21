<?php

require("conexao.php");
require("config-usuario.php");

$id = $_GET["id"];

$resultado = deletarUsuario($id, $conn);

if ($resultado) {
    header(
        "Location: lista_usuario.php?tipo=1&mensagem=Deleção do usuário id [$id] realizada com sucesso!"
    );

} else {
    header(
        "Location: lista_usuario.php?tipo=0&mensagem=Erro durante a deleção do usuário"
    );
}

mysqli_close($conn);

?>