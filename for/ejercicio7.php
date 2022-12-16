<?php
/* Dados 100 números enteros como datos, obtener:
a) Cuántos números leídos fueron mayores que cero.
b) el promedio de los números positivos
c) el promedio de todos los números */
$num = 0;
$num1 = 0;
$contador = 0;
$promedio_positivos = 0;
$contar = 0;
$promedio_numeros = 0;

echo "Cuantos numeros deseas ingresar? ";
$num = readline();
for ($i=1;$i<=$num;$i++)
{
    echo "Ingrese el numero " . $i." : ";
    $num1 = readline();

    if ($num1 > 0)
    {
        $contador = $contador + 1;
    }
    $contar = $contar + $num1;
    $promedio_positivos = $contador / $num;
    $promedio_numeros = $contar / $num;
}
echo "\n-----------------------------------------------------------------";
echo "\nCANTIDAD DE NUMEROS MAYORES DE 0: ".$contador;
echo "\nPROMEDIO DE NUMEROS POSITIVOS: " . $promedio_positivos;
echo "\nPROMEDIO DEL TOTAL DE LOS NUMEROS: " . $promedio_numeros;


?>