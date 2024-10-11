<?php
// Inicia a sessão
session_start();

// Verifica se a sessão está ativa
if (isset($_SESSION['usuario'])) {
    // Destroi todas as sessões
    session_unset();
    session_destroy();

    // Redireciona para a página de login ou qualquer outra página
    header("Location: login.php");
    exit();
} else {
    // Caso o usuário não esteja logado, redireciona para a página de login
    header("Location: login.php");
    exit();
}
?>
