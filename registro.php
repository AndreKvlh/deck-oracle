<?php 
require 'conexao.php';
require 'enviar-email.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DeckOracle | Confirme Seu E-mail</title>
</head>
<body>
    <main>
        <section class="form-menor-centro">
           <?php 
                $nome_usuario = $_POST['nome_usuario'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                //Criptografando a senha
                $senha_cripto = password_hash($senha, PASSWORD_DEFAULT);

                //Gera um token de confirmação
                $token_confirmacao = bin2hex(random_bytes(32));

                //Cria o comando no SQL para ser executado
                $sql_query = "INSERT INTO usuarios (nome_usuario, email, senha, token_confirmacao) VALUES (?, ?, ?, ?)";

                //Preparar a query para lançar no SQL
                $stmt = $pdo->prepare($sql_query);
                $stmt->execute([$nome_usuario, $email, $senha_cripto, $token_confirmacao]);

                echo "<h1>Cadastro realizado com sucesso</h1>";
                enviarEmail($email, $nome_usuario, 'email_conf', $token_confirmacao);
            ?>
            <p>Verifique a sua caixa de entrada e confirme seu cadastro no e-mail que enviamos para lá</p>
            <p>Redirecionando para a home page em 5 segundos...</p>
            <p><a href="index.php">Voltar para a página inicial</a></p>
            <!--<meta http-equiv="refresh" content="5;url=index.php">-->
        </section>
    </main>
</body>
</html>