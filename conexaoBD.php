<?php
$servername = "localhost";
$username = "root";
$password = ""; // ou "usbw" se for o caso
$database = "pwii";

$conexao = new mysqli($servername, $username, $password, $database);
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>
