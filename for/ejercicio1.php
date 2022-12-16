<?php
/* Dado el sueldo de 20 trabajadores, considere un aumento del 15% a cada uno de ellos, 
si su sueldo es inferior a $800. Imprima el sueldo con el aumento incorporado. */
$sueldo = 0;
$aumento = 0;
$acum_total = 0;

echo "DETERMINAR EL AUMENTO DE SUELDO DE 20 TRABAJADORES\n";
for($i=1; $i<=20; $i++)
{
    echo "----------------------------------------------------\n";
    echo "Ingrese el sueldo del trabajador # " . $i ."  $ ";
    $sueldo= readline();
    if ($sueldo<800)
    {
        $aumento = $sueldo * 0.15;
    }else{
        $aumento = 0;
    }
    $acum_total += $sueldo + $aumento;
    /* Imprimir Datos */
    echo "\n~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
    echo "Sueldo: $ " . $sueldo ."\n";
    echo "Aumento: $ " . $aumento ."\n";
    echo "Sueldo con aumento: $ " . $sueldo + $aumento."\n";
}/* Fin FOR */
echo "*********************** PLANILLA ***************************\n";
echo "TOTAL A PAGAR POR EL JEFE: $ " . $acum_total;
?>