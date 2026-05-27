<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mensagens = [
    "email_conf" => [
        "assunto" => "Confirme o e-mail da sua conta",
        "corpo" => "<h1>Você está há um passo de concluir seu cadastro!<h1>
        <p>Para finalizar seu cadastro, clique <a href='{LINK}'>neste link</a> para poder confirmar o seu e-mail.</p>
        <p>Se por acaso houver algum problema com o link acima, basta copiar o link abaixo e colar na barra de navegação do seu navegador:</p>
        <p>'{LINK}'</p>",
        "link" => "http://localhost/confirmacao.php?token="
    ],
    "redefinir_senha" => [
        "assunto" => "Redefinir senha",
        "corpo" => "<h1>Redefina a sua senha<h1>
        <p>Para altera a sua senha, clique <a href='{LINK}'>neste link</a> para poder alterar e acessar sua conta com uma nova senha.</p>
        <p>Se por acaso você não solicitou isso, desconsidere este aviso.</p>",
        "link" => ""
    ]
];

function enviarEmail($email_usuario, $nome_usuario, $mensagem, $token) {
    //Usa as variáveis globais declaradas neste arquivo a fim de
    //ter a base para envio
    global $mensagens;
    global $link;

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'mailpit';
        $mail->SMTPAuth = false;
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 1025;

        //Destinatário e remetente
        $mail->SetFrom('suporte@deckoracle.com', 'Suporte Deck Oracle');
        $mail->addAddress($email_usuario, $nome_usuario);

        //Tornar conteúdo HTML
        $mail->isHTML(true);
        $mail->Subject = $mensagens[$mensagem]['assunto'];

        //Definir o link usando o token
        $link = $mensagens[$mensagem]['link'] . $token;
        //Corpo do e-mail
        $corpo_ajustado = str_replace('{LINK}', $link, $mensagens[$mensagem]['corpo']);
        $mail->Body = $corpo_ajustado;

        $mail->send();

        echo "<p>Cheque a sua caixa de entrada e confirme sua conta pelo e-mail enviado por nós!</p>";
    }
    catch (Exception $e) {
        echo "<p>Erro ao enviar o e-mail: $e</p>";
    }
}