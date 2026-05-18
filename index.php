<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Deck Oracle | Página Inicial</title>
</head>
<body>
    <header>
        <h1>Deck Oracle</h1>
        <nav>
            <ul>
                <li>Dark Mode</li>
                <li>Registro</li>
                <li>Login</li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="imagem">
            <form action="pesquisa.php" method="get">
                <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquisar decks, comandantes...">
                <input type="submit" value="Pesquisar" id="enviar">
                <button type="button">Avançado</button>
            </form>
        </section>
        <section id="decks">
            <div>
                <h1>Decks em Destaque</h1>
                <p>LISTA DE DECKS</p>
            </div>
            <div>
                <h1>Decks Recentes</h1>
                <p>LISTA DE DECKS</p>
            </div>
        </section>
    </main>
    <footer>
        <p>Todos os direitos reservados a Wizards of the Coast</p>
        <p>Todas as opiniões expressas nos comentários não representam a equipe por trás do site DeckOracle</p>
        <p>Todos os valores de cartas são baseados conforme LigaMagic</p>
        <p>Copyright (c)2026 FeijoadaComCésio</p>
    </footer>
</body>
</html>