<?php

session_start();

require("config.php");

$logado = @$_SESSION["logado"];

paginaRestrita(
    $logado,
    "login.php",
    "Necessário fazer login para acessar o perfil."
);

echo criarTopo($logado);
verificaMensagem();
echo criarRodape();

?>