<?php

session_start();
require("config.php");

echo criarTopo();
verificaMensagem();
echo criaLogin("teste.php");
echo criarRodape();

?>