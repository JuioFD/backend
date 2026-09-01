<?php
session_start();
include 'config.php';

$logado = $_SESSION["logado"];

echo $logado;

echo criarTopo($logado);
echo criarRodape("");
?>