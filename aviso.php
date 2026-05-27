<?php 
    //Cria uma nova sessão
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    ob_start();

    $usuario_logado = isset($_SESSION['logado']) && $_SESSION['logado'] == true;

    //Verifica se o usuário está tentando acessar sem estar logado.
    //Caso afirmativo, será redirecionado a página de login
    if(!$usuario_logado) {
        header("Location: login.php");
        exit;
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <title>Confirme o seu e-mail | DeckOracle</title>
</head>
<body>
    <header>
        <h1><a href="index.php">DeckOracle</a></h1>
        <nav>
            <ul>
                <li><a href="javascript:modoEscuro()"><i data-lucide="moon" id="modo-escuro"></i></a></li>
                <li><p>Olá, <strong><?= $_SESSION['usuario_nome'] ?></strong></p></li>
                <li><a href="javascript:mostrarDropdown();"><i data-lucide="circle-user" id="foto-mini"></i><i data-lucide="chevron-down"></i></a></li>
                <ul class="dropdown-menu">
                    <li><i data-lucide="plus"></i>Novo Deck</li>
                    <a href="perfil.php"><li><i data-lucide="user"></i>Meu Perfil</li></a>
                    <li><i data-lucide="settings"></i>Configurações</li>
                    <a href="logout.php"><li style="color:red;"><i data-lucide="log-out"></i>Logout</li></a>
                </ul>
            </ul>
        </nav>
    </header>
    <main>
        <section class="form-menor-centro">
            <div id="aviso">
                <h1>Confirme o seu e-mail</h1>
                <p>Antes de poder prosseguir e usar os serviços da DeckOracle, você precisa <strong>confirmar o seu e-mail</strong></p>
                <p>Cheque a sua caixa de entrada em busca do nosso e-mail a fim de confirmar e poder utilizar nossos serviços.</p>
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