<?php 
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

ob_start();

//Garante que tudo está limpo na sessão quanto
//as informações
$_SESSION = array();

//Finaliza a sessão
session_destroy();

//Redireciona pro início
header("Location: index.php");
exit;