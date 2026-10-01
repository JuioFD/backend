<?php

require("conexao.php");

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    echo "<table>
        <tr>
            <td>BOTÕES</td>
            <td>ID</td>
            <td>Email</td>
            <td>Senha</td>
        </tr>";

    while($row = mysqli_fetch_assoc($result)) {

        echo "
        <tr>
            <td>BOTÕES</td>
            <td>" . $row["id"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["senha"] . "</td>
        </tr>";
    }

    echo "</table>";

} else {
    echo "Nenhum usuario encontrado!";
}

mysqli_close($conn);

?>