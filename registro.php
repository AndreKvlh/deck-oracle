<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DeckOracle | Confirme Seu E-mail</title>
</head>
<body>
    <?php 
    $nome_usuario = $_POST['nome_usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo "<ul>";
    echo "<li>$nome_usuario</li>";
    echo "<li>$email</li>";
    echo "<li>$senha</li>";
    echo "</ul>";

    /*
    1 - Não salvou o cadastro no BD;
    2 - Não criptografou a senha;
    3 - Não salvou a sessão;
    4 - Não enviou e-mail de confirmação;
    5 - Vulnerável a XSS;
    X 6 - Não verificou se as senhas batem umas com as outras;
    X 7 - Não tá checando se a checkbox ela está de fato checada;
    */
    ?>
</body>
</html>