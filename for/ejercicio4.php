<?php
/* Dados como datos 300 números enteros, obtener la suma de los números impares 
y el promedio de los números pares. */
$pares = 0;
$impares = 0;
$porcentaje_pares = 0;
$num = 0;
for ($i = 0; $i < 300; $i++)
  {
     $num = rand(-9, 9);
     echo $num  .", ";
     if ($num == 1 )
     {
         $pares = $impares + 1;
     }
     
     if($num== 8)
     {
         $pares = $pares +1;
         $porcentaje_pares = $pares * 100 / 300;
     }
   }//Fin for
   echo "\n-----------------------------------------------------------------------------";
   echo "\nCANTIDAD DE NUMEROS IMPARES: ".$impares;
echo "\nCANTIDAD DE NUMEROS PARES: " . $pares;
echo "\nPORCENTAJE DE NUMEROS PARES: " . $porcentaje_pares . " %";


?>