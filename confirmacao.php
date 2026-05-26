<?php
require 'conexao.php';

ob_start();

//Obtem o token do link
$token = $_GET['token'];

//Faz uma query buscando o id do usuário em relação ao token
$query = "SELECT id FROM usuarios WHERE token_confirmacao = ?";

$stmt = $pdo->prepare($query);
$stmt->execute([$token]);

$id = $stmt->fetch();

if($id) {
    $query = "UPDATE usuarios SET email_confirmado = TRUE WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id['id']]);
    header("Location: index.php");
    exit;
}