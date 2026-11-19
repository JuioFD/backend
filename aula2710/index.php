<?php

session_start();

require("config.php");
require("config-usuario.php");
require("config.postagem.php");

$logado = @$_SESSION["logado"];

echo criarTopo($logado);

?>

<main>
    <?php echo criarCardsPostagens($conn); ?>
</main>

<?php

echo criarRodape();

?>
