<?php // cadastro.php ?>

<?php require_once 'verificarAcesso.php'; ?>
<?php require_once 'cabecalho.php'; ?>
<?php require_once 'conexaoBD.php'; ?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
    <h2 class="w3-text-teal">Cadastro de Amigo</h2>
    
    <form action="salvar.php" method="post" class="w3-container">
    <label>Nome</label>
    <input class="w3-input w3-border" name="nome" required>

    <label>Email</label>
    <input class="w3-input w3-border" name="email" type="email" required>

    <label>Telefone</label>    
    <input type="text" name="telefone" id="telefone" class="w3-input w3-border" placeholder="(00) 00000-0000" required>


    <!-- Botão de Salvar -->
    <button class="w3-button w3-teal w3-margin-top" type="submit">Salvar</button>

    <!-- Botão de Cancelar/Voltar -->
    <a href="principal.php" class="w3-button w3-gray w3-margin-top w3-round-large">
        <i class="fa fa-arrow-left"></i> Cancelar e Voltar
    </a>
</form>

</div>

<?php require_once 'rodape.php'; ?>

