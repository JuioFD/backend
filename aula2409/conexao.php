<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "juio";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn) {
    die("Falha na conexao " . mysqli_connect_error());
}

?>