<?php

require("conexao.php");

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - E-mail: " . $row["email"]. " - Senha: " . $row["senha"]. "<br>";
    }
}
else {
        echo "Nnenhum usuario encontrado!";
    }


mysqli_close($conn);

?>
