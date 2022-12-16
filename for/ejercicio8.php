<?php
/* Dado el peso, la altura y el sexo de 50 personas que pertenecen a Sonsonate, 
obtenga el promedio del peso y de la altura de esta población. */
$numero = 0;
$contador_mujeres = 0;
$contador_hombres = 0;
$altura = 0;
$peso = 0;
$contador_altura = 0;
$contador_peso = 0;
$promedio_altura = 0;
$promedio_peso = 0;
$sexo = '';
echo "¿Cuantas personas de Sonsonate quisieras evaluar?  ";
$numero = readline();
for ($i = 1; $i <= $numero; $i++)
{
    echo "\nIngrese el sexo de la persona " . $i . "\n: PARA FEMENINO SELECCIONE 1, \nPARA MASCULINO SELECCIONE 2 ";
    $sexo = readline();
    switch ($sexo)
    {
    
    case '1':

        $contador_mujeres = $contador_mujeres + 1;
        break;
    case '2':
        $contador_hombres = $contador_hombres + 1;
        break;

    default:
        echo"OPCION INVALIDA";
        break;
    }
    echo "\nIngrese la altura de la persona: ";
    $altura = readline();
    echo "\nIngrese el peso de la persona: ";
    $peso = readline();
    echo "\n-----------------------------------------------------------";

    $contador_altura=$contador_altura+$altura;
    $contador_peso = $contador_peso + $peso;
    $promedio_altura = $contador_altura / $numero;
    $promedio_peso = $contador_peso / $numero;
}
echo "\nCANTIDAD DE MUJERES: " . $contador_mujeres;
echo "\nCANTIDAD DE HOMBRES: " . $contador_hombres;
echo "\nEL PROMEEDIO DE LA ALTURA DE LA POBLACION DE SONSONATE: " . $promedio_altura . "m";
echo "\nEL PROMEDIO DEL PESO DE LA POBLACION DE SONSONATTE ES: " . $promedio_peso . " kg";

?>