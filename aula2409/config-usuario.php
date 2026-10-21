<?php

function buscarUsuario($id, $conn) {
    $dados = "";

    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $dados = mysqli_fetch_assoc($resultado);
    }

    return $dados;
}

function inserirUsuario($email, $senha, $conn) {
    $sql = "INSERT INTO usuarios (email, senha)
            VALUES ('$email', '$senha')";

    return mysqli_query($conn, $sql);
}

function editarUsuario($idAntigo, $idNovo, $email, $senha, $conn) {
    $sql = "UPDATE usuarios
            SET id = $idNovo,
                email = '$email',
                senha = '$senha'
            WHERE id = $idAntigo";

    return mysqli_query($conn, $sql);
}

function deletarUsuario($id, $conn) {
    $sql = "DELETE FROM usuarios WHERE id = $id";

    return mysqli_query($conn, $sql);
}

function formularioEdicao($idUsuario, $emailUsuario, $senhaUsuario) {
    return '<main>
    <form class="login editar-usuario" action="editar-usuario.php?idAntigo='.$idUsuario.'" method="POST">
        <h1>Formulario de Edição</h1>

        <div class="campo">
            <ion-icon name="person-outline"></ion-icon>
            ID
            <input
                class="input-login"
                type="text"
                name="id"
                placeholder="id"
                value="'.$idUsuario.'"
                required
            >
        </div>

        <div class="campo">
            <ion-icon name="mail-outline"></ion-icon>
            e-mail
            <input
                class="input-login"
                type="text"
                name="email"
                placeholder="email"
                value="'.$emailUsuario.'"
                required
            >
        </div>

        <div class="campo">
            <ion-icon name="lock-closed-outline"></ion-icon>
            Senha
            <input
                class="input-senha"
                type="password"
                name="senha"
                placeholder="senha"
                value="'.$senhaUsuario.'"
                required
            >
        </div>

        <div class="botoes">
            <button type="submit" class="btn ativo">Editar</button>
            <button type="reset" class="btn ativo">Limpar</button>
        </div>
    </form>
</main>';
}

?>