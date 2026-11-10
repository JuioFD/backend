<?php

include("conexao.php");

function criaFormularioCadastroPostagem() {
    return '<main>
    <form class="login" action="inserir_postagem.php" method="POST">
        <h1>Formulário de Cadastro de Postagens</h1>

        <div class="campo">
            <ion-icon name="create-outline"></ion-icon>
            Título
            <input
                class="input-login"
                type="text"
                name="titulo"
                placeholder="Título da postagem"
                required>
        </div>

        <div class="campo">
            <ion-icon name="document-text-outline"></ion-icon>
            Descrição
            <textarea
                class="input-login"
                name="descricao"
                rows="5"
                placeholder="Descrição da postagem"
                required>
                </textarea>
        </div>

        <div class="botoes">
            <button type="submit" class="btn ativo">Cadastrar</button>
            <button type="reset" class="btn ativo">Limpar</button>
        </div>
    </form>
</main>';
}

function inserirPostagem($titulo, $descricao, $idUsuario, $conn) {
    $sql = "INSERT INTO postagem (titulo, descricao, dta, idUsuario) VALUES ('$titulo', '$descricao', NOW(), '$idUsuario')";

    $resultado = mysqli_query($conn, $sql);

    return $resultado;
}

function deletarPostagem($id, $conn) {
    $sql = "DELETE FROM postagem WHERE id = $id";

    $resultado = mysqli_query($conn, $sql);

    return $resultado;
}

function atualizarPostagem($id, $titulo, $descricao, $dta, $idUsuario, $conn) {
    $sql = "UPDATE postagem SET titulo = '$titulo', descricao = '$descricao', dta = '$dta', idUsuario = '$idUsuario' WHERE id = $id";

    $resultado = mysqli_query($conn, $sql);

    return $resultado;
}

function buscarPostagem($id, $conn) {
    $dados = "";

    $sql = "SELECT * FROM postagem WHERE id = $id";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $dados = mysqli_fetch_assoc($resultado);
    }

    return $dados;
}

function formularioEdicaoPostagem($idPostagem, $tituloPostagem, $descricaoPostagem) {
    return '<main>
    <form class="login editar-usuario" action="editar-postagem.php?id='.$idPostagem.'" method="POST">
        <h1>Formulário de Edição de Postagem</h1>

        <div class="campo">
            <ion-icon name="create-outline"></ion-icon>
            Título
            <input
                class="input-login"
                type="text"
                name="titulo"
                placeholder="Título da postagem"
                value="'.$tituloPostagem.'"
                required>
        </div>

        
        <div class="campo">
            <ion-icon name="document-text-outline"></ion-icon>
            Descrição
            <textarea
                class="input-login"
                name="descricao"
                rows="5"
                required>'.$descricaoPostagem.'</textarea>
            </div>


        <div class="botoes">
            <button type="submit" class="btn ativo">Editar</button>
            <button type="reset" class="btn ativo">Limpar</button>
        </div>
    </form>
</main>';
}

function listarPostagem($conn) {
    $sql = "SELECT * FROM postagem";

    $resultado = mysqli_query($conn, $sql);
    $html = "";

    if (mysqli_num_rows($resultado) > 0) {
        $html = "
        <main>
            <div class='tabela-container'>
                <table class='tabela-usuarios'>
                    <tr>
                        <th>Botões</th>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Data</th>
                        <th>Usuário</th>
                    </tr>";

        while ($dados = mysqli_fetch_assoc($resultado)) {
            $html .= "
                    <tr>
                        <td class='acoes'>
                            <a
                                class='btn editar'
                                href='buscar.postagem.php?id=".$dados["id"]."'
                            >
                                <ion-icon name='pencil-outline'></ion-icon>
                            </a>

                            <a
                                class='btn excluir'
                                href='deletar-postagem.php?id=".$dados["id"]."'
                            >
                                <ion-icon name='trash-outline'></ion-icon>
                            </a>
                        </td>
                        <td>".$dados["id"]."</td>
                        <td>".$dados["titulo"]."</td>
                        <td>".$dados["descricao"]."</td>
                        <td>".$dados["dta"]."</td>
                        <td>".$dados["idUsuario"]."</td>
                    </tr>";
        }

        $html .= "
                </table>
            </div>
        </main>";
    } else {
        $html = "<main>Nenhuma postagem encontrada!</main>";
    }

    return $html;
}

function listarPostagemUsuario($idUsuario, $conn) {
    $sql = "SELECT * FROM postagem WHERE idUsuario = '$idUsuario'";

    $resultado = mysqli_query($conn, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        echo "<main><table>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Data</th>
                <th>Usuário</th>
            </tr>";

        while ($dados = mysqli_fetch_assoc($resultado)) {
            echo "<tr>
                <td>".$dados["id"]."</td>
                <td>".$dados["titulo"]."</td>
                <td>".$dados["descricao"]."</td>
                <td>".$dados["dta"]."</td>
                <td>".$dados["idUsuario"]."</td>
            </tr>";
        }

        echo "</table></main>";
    } else {
        echo "nenhuma postagem encontrada";
    }
}

?>

