<?php

function buscarUsuario ($id) {
    global $conn;

$dados = "";
$sql = "SELECT * FROM usuarios WHERE id=$id";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) > 0 ) {
    $dados = mysqli_fetch_assoc($resultado);
}
return $dados;
}

function editarUsuario($idAntigo, $idNovo, $email, $senha) {
    global $conn;

    $sql = "UPDATE usuarios SET id = $idNovo, email = '$email', senha = '$senha' WHERE id = $idAntigo";

    return mysqli_query($conn, $sql);
}

function formularioEdicao($idUsuario, $emailUsuario, $senhaUsuario) {
    return '<main>

<form class="login editar-usuario" action="editar-usuario.php" method="POST">
    <h1> Formulario de Edição </h1>


    <div class="campo">
        <ion-icon name="person-outline"></ion-icon>
        ID
        <input
        class="input-login"
        type="text"
        name="id"
        placeholder="id"
        value = '.$idUsuario.'
        required
        >
    </div>

    <div class="campo">
        <ion-icon name="lock-closed-outline"></ion-icon>
        e-mail
        <input 
        class="input-login"
        type="text"
        name="email"
        placeholder="email"
        value = '.$emailUsuario.'
        required
        >

    <div class="campo">
        <ion-icon name="lock-closed-outline"></ion-icon>
        Senha
        <input 
        class="input-senha"
        type="password"
        name="senha"
        placeholder="senha"
        value = '.$senhaUsuario.'
        required
        >

    <div class="botoes"> 
        <button type="submit" class="btn ativo"> Editar </button>
        <button type="reset" class="btn ativo"> Limpar </button>
        </div>
        </form>

</main>';
}