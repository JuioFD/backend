<?php
include 'config.php';
echo criarTopo("Página principal");

?>
    <main>
<h1> Pinterest </h1>

<form class="login" action="https://br.pinterest.com/search" method="GET">
    <h1> Pinterest </h1>

    <div class="campo">
        <input
        class="input-login"
        type="text"
        name="q"
        placeholder="Digite sua pesquisa no Pinterest"
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