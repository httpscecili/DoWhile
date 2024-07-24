<?php
session_start();

if (!isset($_SESSION['soma_negativo'])) {
    $_SESSION['soma_negativo'] = 0;
}

if (isset($_POST['numero_negativo'])) {
    $numero = intval($_POST['numero_negativo']);
    if ($numero >= 0) {
        $_SESSION['soma_negativo'] += $numero;
    } else {
        echo "A soma dos números inseridos é: " . $_SESSION['soma_negativo'];
        session_destroy();
    }
}
?>

<form method="post">
    Insira números inteiros (insira um número negativo para finalizar): <input type="number" name="numero_negativo">
    <input type="submit" value="Enviar">
</form>
