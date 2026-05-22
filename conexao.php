<?php 
//Variáveis para inicialização do PDO
$host = "db";
$bd = "deck-oracle";
$usuario = "root";
$senha = "feijoad4";

//Criação do PDO e conectar com o BD
try {
    $pdo = new \PDO("mysql:host=$host;dbname=$bd;charset=utf8mb4", $usuario, $senha, [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
    ]);
} catch (\PDOException $e) {
    die("Erro ao conectar no BD ". $e->getMessage());
}