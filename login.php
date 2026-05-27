<?php 
require 'conexao.php';

ob_start();

//Obter as informações do login
$login = $_POST['login'] ?? "";
$senha = $_POST['senha'] ?? "";
$aviso = "";

if($login != "" && $senha != "") {
    //Vamos criar a query para obter as informações do usuário
    $query = "SELECT id, nome_usuario, email, senha FROM usuarios WHERE (nome_usuario = ? OR email = ?) LIMIT 1";

    $stmt = $pdo->prepare($query);
    $stmt->execute([$login, $login]);

    $usuario = $stmt->fetch();
    if($usuario && password_verify($senha, $usuario['senha'])) {
        if(session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        session_regenerate_id(true);

        //Passa as informações da sessão para a superglobal
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome_usuario'];
        $_SESSION['logado'] = true;

        //Redireciona para a home
        header("Location: index.php");
        exit;
    } else {
        $aviso = "<p>Nome do usuário ou senha incorretos!</p>";
    }  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <title>DeckOracle | Login</title>
</head>
<body>
    <header>
        <h1><a href="index.php">DeckOracle</a></h1>
        <nav>
            <ul>
                <li><a href="javascript:modoEscuro()"><i data-lucide="moon" id="modo-escuro"></i></a></li>
                <li><a href="registro.html">Registro</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="login" class="form-menor-centro">
            <h1>Login</h1>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
                <span id="login_errado" class="aviso"><?= $aviso ?></span>
                <label for="login" class="campo">Usuário ou E-mail</label>
                <input type="text" name="login" id="login" class="campo">
                <label for="senha" class="campo">Senha</label>
                <input type="password" name="senha" id="senha" class="campo">
                <input type="checkbox" name="conectado" id="conectado">
                <label for="conectado">Permanecer conectado</label>
                <input type="submit" value="Log In" class="enviar">
            </form>
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