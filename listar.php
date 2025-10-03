<?php require_once 'verificarAcesso.php'; ?>
<?php require_once 'cabecalho.php'; ?>
<?php require_once 'conexaoBD.php'; ?>

<div class="w3-padding w3-content w3-text-grey w3-display-container">
    <h2 class="w3-text-teal">Lista de Amigos</h2>
    
    <table class="w3-table-all w3-hoverable w3-card-4 w3-margin-top">
        <thead>
            <tr class="w3-teal">
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM amigo";
            $resultado = $conexao->query($sql);
            while ($linha = $resultado->fetch_assoc()) {
                echo "<tr>
                    <td>{$linha['idamigo']}</td>
                    <td>{$linha['nome']}</td>
                    <td>{$linha['email']}</td>
                    <td>{$linha['telefone']}</td>
                    <td>
                        <a href='editar.php?id={$linha['idamigo']}' class='w3-button w3-blue w3-round'>Editar</a>
                        <a href='excluir.php?id={$linha['idamigo']}' class='w3-button w3-red w3-round'>Excluir</a>
                    </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Botão de Voltar -->
    <div class="w3-padding w3-center">
        <a href="principal.php" class="w3-button w3-teal w3-round-large w3-large">
            <i class="fa fa-arrow-left"></i> Voltar para o Início
        </a>
    </div>
</div>

<?php require_once 'rodape.php'; ?>
