<?php
if (isset($_POST['numero_par_do'])) {
    $numero = intval($_POST['numero_par_do']);
    $i = 0;
    $pares = [];
    do {
        if ($i % 2 == 0) {
            $pares[] = $i;
        }
        $i++;
    } while ($i <= $numero);
    echo implode(", ", $pares);
}
?>

<form method="post">
    Insira um número inteiro positivo: <input type="number" name="numero_par_do">
    <input type="submit" value="Enviar">
</form>
