<?php // editar.php ?>
<?php
require_once 'verificarAcesso.php';
require_once 'conexaoBD.php';
$id = $_GET['id'];
$sql = "SELECT * FROM amigo WHERE idamigo = $id";
$resultado = $conexao->query($sql);
$linha = $resultado->fetch_assoc();
?>
<?php require_once 'cabecalho.php'; ?>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
    <h2 class="w3-text-teal">Editar Amigo</h2>
    <form action="atualizar.php" method="post" class="w3-container">
        <input type="hidden" name="id" value="<?php echo $linha['idamigo']; ?>">
        <label>Nome</label>
        <input class="w3-input w3-border" name="nome" value="<?php echo $linha['nome']; ?>" required>
        <label>Email</label>
        <input class="w3-input w3-border" name="email" type="email" value="<?php echo $linha['email']; ?>" required>
        <label>Telefone</label>
        <input class="w3-input w3-border" name="telefone" value="<?php echo $linha['telefone']; ?>" required>
        <button class="w3-button w3-teal w3-margin-top" type="submit">Atualizar</button>
    </form>
</div>
<?php require_once 'rodape.php'; ?>