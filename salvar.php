<?php // salvar.php ?>

<?php
require_once 'verificarAcesso.php';
require_once 'conexaoBD.php';

// Pega os dados do formulário com segurança
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';

// Prepara a instrução SQL para evitar SQL Injection
$stmt = $conexao->prepare("INSERT INTO amigo (nome, email, telefone) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $email, $telefone);

if ($stmt->execute()) {
    header("Location: listar.php");
    exit(); // boa prática após redirecionamento
} else {
    echo "Erro ao salvar: " . $stmt->error;
}

$stmt->close();
$conexao->close();
?>
