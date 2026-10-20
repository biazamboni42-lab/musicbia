<?php
// Verifica se existe uma sessão ativa
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Limpa os dados armazenados na sessão
$_SESSION = array();
// Destrói a sessão
session_destroy();

// Redireciona para a página inicial
header("Location: ../index.php");
exit();
?>