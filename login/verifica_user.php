<?php
// Verifica se existe uma sessão ativa
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
// Se não estiver logado, redireciona para a página de login
header("Location: ../login/login.php");
exit();
}
?>