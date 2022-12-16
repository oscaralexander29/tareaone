<?php
/* Resolver el problema anterior considerando además el promedio de la altura y del peso en función del sexo. 
Es decir, obtener el promedio de la altura y peso de la población femenina y masculina. */
$numero = 0;
$contador_femenino = 0;
$contador_masculino = 0;
$altura_femenina = 0;
$peso_femenino = 0;
$altura_masculina = 0;
$peso_masculino = 0;
$promedio_feme_altura = 0;
$suma_feme_altura = 0;
$promedio_feme_peso = 0;
$suma_feme_peso = 0;
$promedio_altura = 0;
$suma_altura = 0;
$promedio_peso = 0;
$suma_peso = 0;
$sexo = '';
echo "¿Cuantas personas de Sonsonate quisieras evaluar?  ";
$numero = readline();
for ($i = 1; $i <= $numero; $i++) {
    echo "\nIngrese el sexo de la persona " . $i . "\nPARA FEMENINO SELECCIONE F o f, \nPARA MASCULINO SELECCIONE M o m ";
    $sexo = readline();
    if ($sexo == 'F' || $sexo == 'f') {
        $contador_femenino = $contador_femenino + 1;

        echo "\nIngrese la altura de la persona: ";
        $altura_femenina = readline();

        echo "\nIngrese el peso de la persona: ";
        $peso_femenino = readline();
        echo "\n-----------------------------------------------------------";
        $suma_feme_altura = $suma_feme_altura + $altura_femenina;
        $promedio_feme_altura = $suma_feme_altura / $contador_femenino;
        $suma_feme_peso = $suma_feme_peso + $peso_femenino;
        $promedio_feme_peso = $suma_feme_peso / $contador_femenino;
    }elseif($sexo=='M'||$sexo=='m')
    {
        $contador_masculino = $contador_masculino + 1;

        echo "\nIngrese la altura de la persona: ";
        $altura_masculina = readline();

        echo "\nIngrese el peso de la persona: ";
        $peso_masculino = readline();
        echo "\n-----------------------------------------------------------";
        $suma_altura = $suma_altura + $altura_masculina;
        $promedio_altura = $suma_altura / $contador_masculino;
        $suma_peso = $suma_peso + $peso_masculino;
        $promedio_peso = $suma_peso / $contador_masculino;
    }
    
}
echo "\nCANTIDAD DE MUJERES: " . $contador_femenino;
echo "\nPROMEDIO DE LA ALTURA DE LA POBLACION FEMENINA: " . $promedio_feme_altura . "m";
echo "\nPROMEDIO DEL PESO DE LA POBLACION FEMENINA: " . $promedio_feme_peso . " kg";
echo "\n**************************************************************************";
echo "\nCANTIDAD DE HOMBRES: " . $contador_masculino;
echo "\nPROMEDIO DE LA ALTURA DE LA POBLACION MASCULINA: " . $promedio_altura . "m";
echo "\nPROMEDIO DEL PESO DE LA POBLACION MASCULINA: " . $promedio_peso . " kg";

?>