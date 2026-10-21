<?php

require("config.php");

echo criarTopo();
echo pesquisaDinamica(
    "https://br.pinterest.com/search",
    "Pinterest",
    "q"
);
echo criarRodape();

?>