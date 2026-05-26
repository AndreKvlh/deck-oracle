<?php 
    require 'conexao.php';

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

    //Faz uma query para o BD a fim de obter a informação se o
    //e-mail do usuário foi confirmado
    $query = "SELECT email_confirmado FROM usuarios WHERE nome_usuario = ?";

    $stmt = $pdo->prepare($query);
    $stmt->execute([$_SESSION['usuario_nome']]);

    $email_confirmado = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil | Deck Oracle</title>
</head>
<body>
    <?php if($email_confirmado): ?>
        <h1>Bem-vindo, usuário!</h1>
    <?php else:?>
        <h1>E-mail não confirmado</h1>
    <?php endif; ?>
</body>
</html>