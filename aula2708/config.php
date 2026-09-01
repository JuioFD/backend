<?php

function criarTopo($logado = 0) {
    return '<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Postagens - Cadastrar Postagens</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="dflex-center">
            <img src="img/logo.png">
            <h1>Posts-IFES</h1>
        </div>
        '.criaMenu($logado).';
    </header>';
}

function criaMenu($logado) {

    $menu = "";

    if ($logado == 1) {
        $menu = '<nav> 
        '.criarLinkMenu("perfil.php", '<ion-icon name="person-outline"></ion-icon>', "Perfil").'            
        '.criarLinkMenu("posts.php", '<ion-icon name="add-outline"></ion-icon>', "Cadastrar Postagem").'    
        '.criarLinkMenu("sair.php", '<ion-icon name="exit-outline"></ion-icon>', "Sair").'        
        </nav>';
    }
    else {
        $menu = '<nav> 
        '.criarLinkMenu("index.php", "<ion-icon name='home-outline'></ion-icon>", "Início").'   
        '.criarLinkMenu("posts.php", "<ion-icon name='paper-plane-outline'></ion-icon>", "Postagens").'     
        '.criarLinkMenu("login.php", '<ion-icon name="lock-closed-outline"></ion-icon>', "Acessar").'                        
        '.criarLinkMenu("atv2708.php", '<ion-icon name="bug-outline"></ion-icon>', "27/08").'                         
        '.criarLinkMenu("contato.php", '<ion-icon name="paper-plane-outline"></ion-icon>', "Contato").'
        '.criarLinkMenu("pesquisa.php", '<ion-icon name="search-outline"></ion-icon>', "Pesquisa").'
        '.criarLinkMenu("pinterest.php", '<ion-icon name="logo-pinterest"></ion-icon>', "Pinterest").'
        </nav>';
    }

    return $menu;
}

function criarRodape($rodape) {
    $rodape = ' <footer class="dflex-center">
        <p>&copy; 2024 Postagens. Todos os direitos reservados.</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>    
    </body>
    </html>';
    return $rodape;
}

function linkAtivo($link) {
    $resposta = "";
    $paginaAtual = basename($_SERVER['PHP_SELF']);
    if($link == $paginaAtual) 
        $resposta = "ativo";
    else 
        $resposta = "";


    return $resposta;
}

function criarLinkMenu($pagina, $icone, $nome) {
    $html = ' <a class="btn '.linkAtivo($pagina).'" href="'.$pagina.'">
                '.$icone.' '.$nome.'
            </a>';
    return $html;
}

function pesquisaDinamica($action, $name, $inputname) {
   $html = '    <main>

<form class="login" action="'.$action.'" method="GET">
    <h1> '.$name.' </h1>

    <div class="campo">
        <ion-icon name="search-outline"></ion-icon>
        Pesquisa 
        <input
        class="input-login"
        type="text"
        name="'.$inputname.'"
        placeholder="Digite sua pesquisa"
        required
        >
    </div>

    <div class="botoes"> 
    <button type="submit" class="btn ativo"> Pesquisa </button>
    <button type="reset" class="btn ativo"> Limpar </button>
    </div>
</form>
</main>';

return $html;
}

?>
