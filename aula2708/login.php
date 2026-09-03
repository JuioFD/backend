<?php
session_start();


include 'config.php';

echo criarTopo("formulario de login");
?>

<main>
    <form class="login" action="teste.php" method="POST">
    <h1> Formulario de Login </h1>

    <div class="campo">
        <ion-icon name="person-outline"></ion-icon>
        Usuário
        <input
        class="input-login"
        type="text"
        name="login"
        placeholder="login"
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
        required
        >
    </div>

    <div class="botoes"> 
    <button type="submit" class="btn ativo"> Login </button>
    <button type="reset" class="btn ativo"> Limpar </button>
    </div>
    </form>
</main>

<?php
echo criarRodape("");
?>