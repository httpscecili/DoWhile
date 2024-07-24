<?php
if (isset($_POST['numero_tabuada_do'])) {
    $numero = intval($_POST['numero_tabuada_do']);
    $i = 1;
    do {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
        $i++;
    } while ($i <= 10);
}
?>

<form method="post">
    Insira um número inteiro: <input type="number" name="numero_tabuada_do">
    <input type="submit" value="Enviar">
</form>
