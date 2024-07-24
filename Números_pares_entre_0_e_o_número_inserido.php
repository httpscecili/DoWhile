<?php
if (isset($_POST['numero_par'])) {
    $numero = intval($_POST['numero_par']);
    $i = 0;
    $pares = [];
    while ($i <= $numero) {
        if ($i % 2 == 0) {
            $pares[] = $i;
        }
        $i++;
    }
    echo implode(", ", $pares);
}
?>

<form method="post">
    Insira um número inteiro positivo: <input type="number" name="numero_par">
    <input type="submit" value="Enviar">
</form>
