<?php
session_start();
include 'config.php';

$logado = $_SESSION["logado"];

if ($logado == 1) {
    echo criarTopo($logado);
    echo criarRodape("");
}

else {
header("Location: index.php");
}

?>