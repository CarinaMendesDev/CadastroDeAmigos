<?php // excluir.php ?>
<?php
require_once 'verificarAcesso.php';
require_once 'conexaoBD.php';
$id = $_GET['id'];

$sql = "DELETE FROM amigo WHERE idamigo = $id";
if ($conexao->query($sql) === TRUE) {
    header("Location: listar.php");
} else {
    echo "Erro ao excluir: " . $conexao->error;
}
$conexao->close();
?>
