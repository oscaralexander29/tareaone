<?php
/* Dados 24 números reales que representan las temperaturas del exterior en un período de 24 horas. 
Encuentre la temperatura media del día y las temperaturas más alta y más baja del día. */
$temperatura = "";
$contador = 0;
$temperatura_media = 0;
$temperatura_alta = 0;
$temperatura_baja = 0;

echo "Cual es la Temperatura a la 1: ";
$temperatura = readline();
$temperatura_baja = $temperatura;

for ($i=2;$i<=8;$i++)
{
    echo "\nEscribe la temperatura de la hora " . $i .": ";
    $temperatura = readline();
    $contador = $temperatura + $contador;
    if ($temperatura>$temperatura_alta)
    {
        $temperatura_alta = $temperatura;

    } elseif($temperatura<$temperatura_baja)
    {
        $temperatura_baja = $temperatura;

    }
}
$temperatura_media = $contador / 24;

echo "\nEl promedio de la temperatura del dia es: " . $temperatura_media;
echo "\nLa temperatura mayor de 24 horas es: " . $temperatura_alta;
echo "\nLa temperatura menor de 24 horas es: " . $temperatura_baja;

?>