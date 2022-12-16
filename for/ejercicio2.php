<?php
/* Calcule el aumento de sueldos para 50 empleados de una empresa, bajo el siguiente criterio:
a. Si el sueldo es menor a $1000: aumento 12%
b. Si el sueldo está comprendido entre $1000 y $25000: aumento 10%
c. Si el sueldo es mayor a $25000: aumento 8%
d. Imprima el nuevo sueldo del trabajador y el monto total de la nómina considerando el aumento. */
$sueldo = 0;
$aumento = 0;
$acum_total = 0;

echo "CALCULAR EL AUMENTO DE SUELDO PARA 50 EMPLEADOS DE UNA EMPRESA\n";
for($i=1; $i<=50; $i++)
{
    echo "----------------------------------------------------\n";
    echo "Ingrese el sueldo del trabajador # " . $i ."  $ ";
    $sueldo= readline();
    if ($sueldo<1000)
    {
        $aumento = $sueldo * 0.12;

    }elseif ($sueldo>=1000&&$sueldo<=25000)
    {
        $aumento = $sueldo*0.1;

    }else{
        $aumento = $sueldo * 0.08;
    }
    $acum_total += $sueldo + $aumento;
    /* Imprimir Datos */
    echo "\n~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
    echo "Sueldo: $ " . $sueldo ."\n";
    echo "Aumento: $ " . $aumento ."\n";
    echo "Sueldo del trabajador: $ " . $sueldo + $aumento."\n";
}/* Fin FOR */
echo "*********************** NOMINA ***************************\n";
echo "MONTO TOTAL DE LA NOMINA: $ " . $acum_total;


?>