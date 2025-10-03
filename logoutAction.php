<?php
// Inicia a sessão
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

session_unset(); // remove as variáveis da sessão
session_destroy(); 

// Redireciona para a página de login
header("Location: index.php");
exit();
