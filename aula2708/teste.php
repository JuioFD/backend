<?php
include 'config.php';
/* 
$nomeArquivo = $_SERVER['PHP_SELF'];
//echo $nomeArquivo;

$nomeAlterado = basename($nomeArquivo);
//echo $nomeAlterado;

echo basename ($_SERVER['PHP_SELF']);

*/

print_r($_POST);
$login = $_POST['login'];
$senha = $_POST['senha'];

if($login == "admin" && $senha == "123") {
    echo  "acesso liberado";
}
else {
    echo "errou";
}

?>