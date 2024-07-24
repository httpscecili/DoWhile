<?php
session_start();

if (!isset($_SESSION['tentativas'])) {
    $_SESSION['tentativas'] = 0;
}

$senha_correta = "senha123";
$mensagem = "";

if (isset($_POST['senha'])) {
    $senha = $_POST['senha'];
    if ($senha == $senha_correta) {
        $mensagem = "Senha correta! Acesso permitido.";
        session_destroy();
    } else {
        $_SESSION['tentativas']++;
        if ($_SESSION['tentativas'] >= 3) {
            $mensagem = "Número máximo de tentativas atingido. Acesso negado.";
            session_destroy();
        } else {
            $mensagem = "Senha incorreta! Tentativas restantes: " . (3 - $_SESSION['tentativas']);
        }
    }
}
?>

<form method="post">
    Insira a senha: <input type="password" name="senha">
    <input type="submit" value="Enviar">
</form>
<?php
if ($mensagem != "") {
    echo $mensagem;
}
?>
