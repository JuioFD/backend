<?php

session_start();

require("config.php");
require("conexao.php");
require("config-usuario.php");

$logado = @$_SESSION["logado"];

paginaRestrita(
    $logado,
    "login.php",
    "Para listar os usuários é necessário ter acesso."
);

echo criarTopo($logado);

verificaMensagem();

$resultado = listarUsuarios($conn);

if (mysqli_num_rows($resultado) > 0) {

    echo "
    <main>
        <div class='tabela-container'>
            <table class='tabela-usuarios'>
                <tr>
                    <th>Botoes</th>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Senha</th>
                </tr>";

    while ($dados = mysqli_fetch_assoc($resultado)) {

        echo "
                <tr>
                    <td class='acoes'>
                        <a
                            class='btn editar'
                            href='buscar.usuario.php?id=" . $dados["id"] . "'
                        >
                            <ion-icon name='search-circle-outline'></ion-icon>
                        </a>

                        <a
                            class='btn excluir'
                            href='deletar-usuario.php?id=" . $dados["id"] . "'
                        >
                            <ion-icon name='trash-outline'></ion-icon>
                        </a>
                    </td>

                    <td>" . $dados["id"] . "</td>
                    <td>" . $dados["email"] . "</td>
                    <td>" . md5($dados["senha"]) . "</td>
                </tr>";
    }

    echo "
            </table>
        </div>
    </main>";

} else {
    echo "
    <main>
        Nenhum usuário encontrado!
    </main>";
}

mysqli_close($conn);

echo criarRodape();

?>