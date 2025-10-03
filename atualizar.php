<?php
require_once 'verificarAcesso.php';
require_once 'conexaoBD.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "UPDATE amigo SET nome='$nome', email='$email', telefone='$telefone' WHERE idamigo=$id";

if ($conexao->query($sql) === TRUE) {
    header("Location: listar.php");
    exit();
} else {
    echo "Erro ao atualizar: " . $conexao->error;
}
$conexao->close();
?>
