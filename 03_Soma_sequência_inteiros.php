<?php
session_start();

if (!isset($_SESSION['soma'])) {
    $_SESSION['soma'] = 0;
}

if (isset($_POST['numero_soma'])) {
    $numero = intval($_POST['numero_soma']);
    if ($numero != 0) {
        $_SESSION['soma'] += $numero;
    } else {
        echo "A soma dos números inseridos é: " . $_SESSION['soma'];
        session_destroy();
    }
}
?>

<form method="post">
    Insira números inteiros (digite '0' para finalizar): <input type="number" name="numero_soma">
    <input type="submit" value="Enviar">
</form>
