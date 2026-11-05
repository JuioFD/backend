
<?php
include("conexao.php");

function inserirPostagem($titulo, $descricao, $idUsuario, $conn) {
    $sql = "INSERT INTO postagem (titulo, descricao, dta, idUsuario) VALUES ('$titulo', '$descricao', NOW(), '$idUsuario')";

    $resultado = mysqli_query($conn, $sql);

    return $resultado;
};

function deletarPostagem($id, $conn) {
    $sql = "DELETE FROM postagem WHERE id = $id";

    $resultado = mysqli_query($conn, $sql);

    return $resultado;
};

function atualizarPostagem($id, $titulo, $descricao, $dta, $idUsuario, $conn) {
    $sql = "UPDATE postagem SET titulo = '$titulo', descricao = '$descricao', dta = '$dta', idUsuario = '$idUsuario' WHERE id = $id";
    
    $resultado = mysqli_query($conn, $sql);

    return $resultado;
};


function listarPostagem($conn){
    $sql = "SELECT * FROM postagem";
    $resultado = mysqli_query($conn, $sql);
    $html = "";

    if (mysqli_num_rows($resultado) > 0) {

        $html = "
        <main>
            <div class='tabela-container'>
                <table class='tabela-usuarios'>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Data</th>
                        <th>Usuário</th>
                    </tr>";

        while ($dados = mysqli_fetch_assoc($resultado)) {

            $html .= "
                    <tr>
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
};

function listarPostagemUsuario($idUsuario, $conn){
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
        echo "Nenhuma postagem encontrada!";
    }
};

?>
