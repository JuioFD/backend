<?php

require("conexao.php");
require("config.php");

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);

echo criarTopo(0);

if (mysqli_num_rows($result) > 0) {

    echo "
    <main>
        <div class='tabela-container'>

            <table class='tabela-usuarios'>
                <tr>
                    <th>Ações</th>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Senha</th>
                </tr>";

    while($row = mysqli_fetch_assoc($result)) {

        echo "
                <tr>
                    <td class='acoes'>

                        <a class='btn editar'
                        href='editar-usuario.php?id=" . $row["id"] . "'>
                            <ion-icon name='create-outline'></ion-icon>
                        </a>

                        <a class='btn excluir'
                        href='deletar-usuario.php?id=" . $row["id"] . "'>
                            <ion-icon name='trash-outline'></ion-icon>
                        </a>

                    </td>

                    <td>" . $row["id"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["senha"] . "</td>
                </tr>";
    }

    echo "
            </table>

        </div>
    </main>";

} else {
    echo "<main>Nenhum usuário encontrado!</main>";
}

mysqli_close($conn);

echo criarRodape("");

?>