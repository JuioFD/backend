<?php
session_start();
include 'config.php';

$logado = 0;

if (isset($_SESSION["logado"])) {
    $logado = $_SESSION["logado"];
}

paginaRestrita($logado);

if ($logado == 1) {

    echo criarTopo($logado);

    if (isset($_SESSION['mensagem'])) {

        echo criaMensagem(
            $_SESSION['tipo'],
            $_SESSION['mensagem']
        );

        unset($_SESSION['tipo']);
        unset($_SESSION['mensagem']);
    }

    echo criarRodape("");
}

?>