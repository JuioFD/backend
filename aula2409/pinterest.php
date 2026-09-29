<?php
include 'config.php';
echo criarTopo("Página principal");

echo pesquisaDinamica("https://br.pinterest.com/search", "Pinterest", "q");

echo criarRodape("");
?>