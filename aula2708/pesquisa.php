<?php
include 'config.php';
echo criarTopo("Página principal");

?>
    <main>
<h1> Google </h1>

<form class="login" action="https://www.google.com/search" method="GET">
    <h1> Formulario de Login </h1>

    <div class="campo">
        <ion-icon name="search-outline"></ion-icon>
        Pesquisa 
        <input
        class="input-login"
        type="text"
        name="q"
        placeholder="Digite sua pesquisa"
        required
        >
    </div>

    <button type="submit" class="btn ativo"> Pesquisa </button>
    <button type="reset" class="btn ativo"> Limpar </button>
</form>
</main>


<?php
echo criarRodape("");
?>