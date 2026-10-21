<?php

session_start();

$login = $_POST["login"];
$senha = $_POST["senha"];
$senha_cript = md5($senha);

if (
    $login == "admin"
    &&
    $senha_cript == md5("123")
) {
    $_SESSION["logado"] = 1;
    $_SESSION["nome"] = $login;

    header(
        "Location: perfil.php?tipo=1&mensagem=Login realizado com sucesso!"
    );

} else {
    $_SESSION["logado"] = 0;
    header(
        "Location: login.php?tipo=0&mensagem=Usuario ou senha incorretos."
    );
}
?>