<?php

session_start();
require("config.php");

echo criarTopo();
verificaMensagem();

echo criaLogin();
echo criarRodape();

?>