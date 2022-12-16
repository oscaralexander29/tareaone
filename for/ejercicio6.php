<?php
/* Una compañía de seguros tiene contratados a 30 vendedores. Cada uno hace tres ventas a la semana. 
Su política de pagos es que un vendedor recibe un sueldo base y 10% extra por comisiones de sus ventas. 
El gerente de su compañía desea saber cuánto dinero obtendrá en la semana cada vendedor por concepto 
de comisiones por las tres ventas realizadas y cuánto tomando en cuenta su sueldo base y sus comisiones. */
$nombre = "";
$sueldo = 0;
$venta1 = 0;
$venta2 = 0;
$venta3 = 0;
$comisiones = 0;
$total_ventas = 0;
$total_sueldo = 0;
$contado = 0;
for ($i=1;$i<=30;$i++)
{
    echo "\nNombre del empleado: ";
    $nombre = readline();

    echo "\nSueldo del empleado: ";
    $sueldo = readline();

    echo "\nPrimer venta: ";
    $venta1 = readline();

    echo "\nSegunda venta: ";
    $venta2 = readline();

    echo "\nTercera venta: ";
    $venta3 = readline();

    $total_ventas = $venta1 + $venta2 + $venta3;
    $comisiones = ($venta1 + $venta2 + $venta3) * 0.1;
    $total_sueldo = $sueldo + $comisiones;
    $contado = $contado + $total_ventas;

    echo "\nSEMANA " . $i;
    echo "\nNombre del empleado: " . $nombre;
    echo "\nSueldo base: $ " . $sueldo;
    echo "\nTotal ventas semanales: $ " . $total_ventas;
    echo "\nComisiones: $" . $comisiones;
    echo "\nSueldo Total con Comisiones: $ " . $total_sueldo;
    echo "\n--------------------------------------------------------------";
}
echo "\nEL TOTAL CAPTADO DE VENTAS REALIZADAS EN LA SEMANA ES: $ " . $contado;

?>