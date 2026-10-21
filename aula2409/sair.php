<?php

session_start();
session_destroy();

header(
    "Location: login.php?tipo=1&mensagem=Usuário saiu do sistema."
);

?>