<?php 
if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

$usuario_logado = isset($_SESSION['logado']) && $_SESSION['logado'] == true;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <title>DeckOracle | Página Inicial</title>
</head>
<body>
    <header>
        <h1><a href="index.php">DeckOracle</a></h1>
        <nav>
            <ul>
                <li><a href="javascript:modoEscuro()"><i data-lucide="moon" id="modo-escuro"></i></a></li>
                <?php if($usuario_logado) : ?>
                    <li><p>Olá, <strong><?= $_SESSION['usuario_nome'] ?></strong></p></li>
                    <li><a href="javascript:mostrarDropdown();"><i data-lucide="circle-user" id="foto-mini"></i><i data-lucide="chevron-down"></i></a></li>
                    <ul class="dropdown-menu">
                        <li><i data-lucide="plus"></i>Novo Deck</li>
                        <li><i data-lucide="user"></i>Meu Perfil</li>
                        <li><i data-lucide="settings"></i>Configurações</li>
                        <a href="logout.php"><li style="color:red;"><i data-lucide="log-out"></i>Logout</li></a>
                    </ul>
                <?php else : ?>
                    <li><a href="registro.html">Registro</a></li>
                    <li><a href="login.php">Login</a></li>
                <?php endif ; ?>
            </ul>
        </nav>
    </header>
    <main>
        <section id="imagem">
            <form action="pesquisa.php" method="get">
                <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquisar decks, comandantes...">
                <input type="submit" value="Pesquisar" class="enviar">
                <button type="button">Avançado</button>
            </form>
        </section>
        <section id="decks">
            <div class="vitrine">
                <h1>Decks em Destaque</h1>
                <div class="amostra-deck">
                    <div class="imagem-amostra">
                        <div class="simbolo-mana" id="w">w</div>
                        <div class="simbolo-mana" id="u">u</div>
                        <div class="simbolo-mana" id="b">b</div>
                        <div class="simbolo-mana" id="r">r</div>
                        <div class="simbolo-mana" id="g">g</div>
                    </div>
                    <div class="texto-amostra">
                        <h2>Nome do Deck</h2>
                        <h3>Formato</h3>
                        <h4>Usuário</h4>
                        <p>Avaliação e Comentários</p>
                    </div>
                </div>
                <div class="amostra-deck">
                    <div class="imagem-amostra">
                        <div class="simbolo-mana" id="w">w</div>
                        <div class="simbolo-mana" id="u">u</div>
                        <div class="simbolo-mana" id="b">b</div>
                        <div class="simbolo-mana" id="r">r</div>
                        <div class="simbolo-mana" id="g">g</div>
                    </div>
                    <div class="texto-amostra">
                        <h2>Nome do Deck</h2>
                        <h3>Formato</h3>
                        <h4>Usuário</h4>
                        <p>Avaliação e Comentários</p>
                    </div>
                </div>
                <div class="amostra-deck">
                    <div class="imagem-amostra">
                        <div class="simbolo-mana" id="w">w</div>
                        <div class="simbolo-mana" id="u">u</div>
                        <div class="simbolo-mana" id="b">b</div>
                        <div class="simbolo-mana" id="r">r</div>
                        <div class="simbolo-mana" id="g">g</div>
                    </div>
                    <div class="texto-amostra">
                        <h2>Nome do Deck</h2>
                        <h3>Formato</h3>
                        <h4>Usuário</h4>
                        <p>Avaliação e Comentários</p>
                    </div>
                </div>
                <div class="amostra-deck">
                    <div class="imagem-amostra">
                        <div class="simbolo-mana" id="w">w</div>
                        <div class="simbolo-mana" id="u">u</div>
                        <div class="simbolo-mana" id="b">b</div>
                        <div class="simbolo-mana" id="r">r</div>
                        <div class="simbolo-mana" id="g">g</div>
                    </div>
                    <div class="texto-amostra">
                        <h2>Nome do Deck</h2>
                        <h3>Formato</h3>
                        <h4>Usuário</h4>
                        <p>Avaliação e Comentários</p>
                    </div>
                </div>
                <div class="amostra-deck">
                    <div class="imagem-amostra">
                        <div class="simbolo-mana" id="w">w</div>
                        <div class="simbolo-mana" id="u">u</div>
                        <div class="simbolo-mana" id="b">b</div>
                        <div class="simbolo-mana" id="r">r</div>
                        <div class="simbolo-mana" id="g">g</div>
                    </div>
                    <div class="texto-amostra">
                        <h2>Nome do Deck</h2>
                        <h3>Formato</h3>
                        <h4>Usuário</h4>
                        <p>Avaliação e Comentários</p>
                    </div>
                </div>
                <div class="amostra-deck">
                    <div class="imagem-amostra">
                        <div class="simbolo-mana" id="w">w</div>
                        <div class="simbolo-mana" id="u">u</div>
                        <div class="simbolo-mana" id="b">b</div>
                        <div class="simbolo-mana" id="r">r</div>
                        <div class="simbolo-mana" id="g">g</div>
                    </div>
                    <div class="texto-amostra">
                        <h2>Nome do Deck</h2>
                        <h3>Formato</h3>
                        <h4>Usuário</h4>
                        <p>Avaliação e Comentários</p>
                    </div>
                </div>
                <div class="amostra-deck">
                    <div class="imagem-amostra">
                        <div class="simbolo-mana" id="w">w</div>
                        <div class="simbolo-mana" id="u">u</div>
                        <div class="simbolo-mana" id="b">b</div>
                        <div class="simbolo-mana" id="r">r</div>
                        <div class="simbolo-mana" id="g">g</div>
                    </div>
                    <div class="texto-amostra">
                        <h2>Nome do Deck</h2>
                        <h3>Formato</h3>
                        <h4>Usuário</h4>
                        <p>Avaliação e Comentários</p>
                    </div>
                </div>
                <div class="amostra-deck">
                    <div class="imagem-amostra">
                        <div class="simbolo-mana" id="w">w</div>
                        <div class="simbolo-mana" id="u">u</div>
                        <div class="simbolo-mana" id="b">b</div>
                        <div class="simbolo-mana" id="r">r</div>
                        <div class="simbolo-mana" id="g">g</div>
                    </div>
                    <div class="texto-amostra">
                        <h2>Nome do Deck</h2>
                        <h3>Formato</h3>
                        <h4>Usuário</h4>
                        <p>Avaliação e Comentários</p>
                    </div>
                </div>
                <a href="#">Ver mais...</a>
            </div>
            <div class="vitrine">
                <h1>Decks Recentes</h1>
                <div class="amostra-deck">
                    <div class="imagem-amostra">
                        <div class="simbolo-mana" id="w">w</div>
                        <div class="simbolo-mana" id="u">u</div>
                        <div class="simbolo-mana" id="b">b</div>
                        <div class="simbolo-mana" id="r">r</div>
                        <div class="simbolo-mana" id="g">g</div>
                    </div>
                    <div class="texto-amostra">
                        <h2>Nome do Deck</h2>
                        <h3>Formato</h3>
                        <h4>Usuário</h4>
                        <p>Avaliação e Comentários</p>
                    </div>
                </div>
                <div class="amostra-deck">
                    <div class="imagem-amostra">
                        <div class="simbolo-mana" id="w">w</div>
                        <div class="simbolo-mana" id="u">u</div>
                        <div class="simbolo-mana" id="b">b</div>
                        <div class="simbolo-mana" id="r">r</div>
                        <div class="simbolo-mana" id="g">g</div>
                    </div>
                    <div class="texto-amostra">
                        <h2>Nome do Deck</h2>
                        <h3>Formato</h3>
                        <h4>Usuário</h4>
                        <p>Avaliação e Comentários</p>
                    </div>
                </div>
                <div class="amostra-deck">
                    <div class="imagem-amostra">
                        <div class="simbolo-mana" id="w">w</div>
                        <div class="simbolo-mana" id="u">u</div>
                        <div class="simbolo-mana" id="b">b</div>
                        <div class="simbolo-mana" id="r">r</div>
                        <div class="simbolo-mana" id="g">g</div>
                    </div>
                    <div class="texto-amostra">
                        <h2>Nome do Deck</h2>
                        <h3>Formato</h3>
                        <h4>Usuário</h4>
                        <p>Avaliação e Comentários</p>
                    </div>
                </div>
                <div class="amostra-deck">
                    <div class="imagem-amostra">
                        <div class="simbolo-mana" id="w">w</div>
                        <div class="simbolo-mana" id="u">u</div>
                        <div class="simbolo-mana" id="b">b</div>
                        <div class="simbolo-mana" id="r">r</div>
                        <div class="simbolo-mana" id="g">g</div>
                    </div>
                    <div class="texto-amostra">
                        <h2>Nome do Deck</h2>
                        <h3>Formato</h3>
                        <h4>Usuário</h4>
                        <p>Avaliação e Comentários</p>
                    </div>
                </div>
                <a href="#">Ver mais...</a>
            </div>
        </section>
    </main>
    <footer>
        <p>Todos os direitos reservados a Wizards of the Coast</p>
        <p>Todas as opiniões expressas nos comentários não representam a equipe por trás do site DeckOracle</p>
        <p>Todos os valores de cartas são baseados conforme LigaMagic</p>
        <p>Copyright (c)2026 FeijoadaComCésio</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>