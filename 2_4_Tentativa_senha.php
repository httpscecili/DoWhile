<?php
session_start();

if (!isset($_SESSION['tentativas_do'])) {
    $_SESSION['tentativas_do'] = 0;
}

$senha_correta = "senha123";
$mensagem = "";

if (isset($_POST['senha_do'])) {
    $senha = $_POST['senha_do'];
    do {
        if ($senha == $senha_correta) {
            $mensagem = "Senha correta! Acesso permitido.";
            session_destroy();
        } else {
            $_SESSION['tentativas_do']++;
            if ($_SESSION['tentativas_do'] >= 3) {
                $mensagem = "Número máximo de tentativas atingido. Acesso negado.";
                session_destroy();
            } else {
                $mensagem = "Senha incorreta! Tentativas restantes: " . (3 - $_SESSION['tentativas_do']);
            }
        }
    } while ($senha != $senha_correta && $_SESSION['tentativas_do'] < 3);
}
?>

<form method="post">
    Insira a senha: <input type="password" name="senha_do">
    <input type="submit" value="Enviar">
</form>
<?php
if ($mensagem != "") {
    echo $mensagem;
}
?>
