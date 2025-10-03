<?php
// Inicia a sessão
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once './conexaoBD.php';

$nome = $_POST['txtNome'] ?? '';
$senha = $_POST['txtSenha'] ?? '';

// Prepara a consulta com segurança
$sql = "SELECT * FROM usuario WHERE nome = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $nome);
$stmt->execute();
$resultado = $stmt->get_result();
$linha = $resultado->fetch_assoc();

// Se o login for válido
if ($linha && $linha['senha'] === $senha) {
    $_SESSION['logado'] = $nome;

    // Exibe mensagem de boas-vindas e redireciona
    $nomeFormatado = ucfirst(htmlspecialchars($nome));
    echo "
    <!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='refresh' content='2;url=principal.php'>
        <title>Bem-vinda</title>
        <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
    </head>
    <body>
        <div class='w3-padding w3-content w3-teal w3-third w3-display-middle w3-center w3-round-large'>
            <h2 style='color:white;'>$nomeFormatado, Seja Bem-Vinda!</h2>
        </div>
    </body>
    </html>";
    exit();
}

// Se o login for inválido
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Inválido</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="w3-padding w3-content w3-third w3-display-middle w3-center">
        <i class="fa fa-exclamation-triangle w3-text-red w3-jumbo"></i>
        <h2 class="w3-text-red">Login Inválido!</h2>
        <p class="w3-text-grey">Usuário ou senha incorretos.</p>
        <a href="index.php" class="w3-button w3-teal w3-margin-top w3-round-large">Tentar Novamente</a>
    </div>
    <?php require_once './rodape.php'; ?>
</body>
</html>
