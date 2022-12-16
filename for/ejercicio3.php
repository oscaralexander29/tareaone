<?php
/* Leer 100 números enteros y contar cuántos de ellos son positivos, negativos o nulos. */
$nulos = 0;
$negativos = 0;
$positivos = 0;
$num = 0;

echo "CONTAR CUANTOS NUMEROS SON NULOS, NEGATIVOS Y POSITIVOS\n";
for ($i = 0; $i < 100; $i++) {
    $num = rand(-100, 100);
    echo $num . ", ";
    if ($num == 0) {
        $nulos = $nulos + 1;

    } elseif ($num < 0) {
        $negativos = $negativos + 1;

    } else {
        $positivos = $positivos + 1;
    }
} /* Fin FOR */
/* Imprimir Datos */
echo "\n~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
echo "CANTIDAD DE NUMEROS NULOS: " . $nulos . "\n";
echo "➖ CANTIDAD DE NUMEROS NEGATIVOS: " . $negativos . "\n";
echo "➕ CANTIDAD DE NUMEROS POSITIVOS: " . $positivos . "\n";

?>