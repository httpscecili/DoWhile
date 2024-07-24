<?php
if (isset($_POST['numero_tabuada'])) {
    $numero = intval($_POST['numero_tabuada']);
    $i = 1;
    while ($i <= 10) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
        $i++;
    }
}
?>

<form method="post">
    Insira um número inteiro: <input type="number" name="numero_tabuada">
    <input type="submit" value="Enviar">
</form>
