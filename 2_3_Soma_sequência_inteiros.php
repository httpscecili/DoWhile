<?php
session_start();

if (!isset($_SESSION['soma_do'])) {
    $_SESSION['soma_do'] = 0;
}

if (isset($_POST['numero_soma_do'])) {
    $numero = intval($_POST['numero_soma_do']);
    do {
        if ($numero != 0) {
            $_SESSION['soma_do'] += $numero;
        } else {
            echo "A soma dos números inseridos é: " . $_SESSION['soma_do'];
            session_destroy();
        }
    } while ($numero != 0);
}
?>

<form method="post">
    Insira números inteiros (digite '0' para finalizar): <input type="number" name="numero_soma_do">
    <input type="submit" value="Enviar">
</form>
