<?php
session_start();

include 'config.php';

echo criarTopo("formulario de login");
echo criaLogin();

if (isset($_SESSION['mensagem'])) {
    echo criaMensagem (
        $_SESSION['tipo'],
        $_SESSION['mensagem']
    );

    unset($_SESSION['tipo']);
    unset($_SESSION['mensagem']);
}

echo criarRodape("");
?>