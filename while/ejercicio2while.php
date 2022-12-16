<?php
/* En un supermercado una señora pone en su carrito los artículos que va tomando de los estantes. La señora
quiere asegurarse de que el cajero le cobre bien lo que ella ha comprado, por lo que cada vez que toma un
artículo anota su precio junto con la cantidad de artículos iguales que ha tomado y determina cuánto dinero
gastará en ese artículo; a esto le suma lo que irá gastando en los demás artículos, hasta que decide que ya tomó
todo lo que necesitaba. Ayúdale a esta señora a obtener el total de sus compras. */

/* WHILE */
/* 
1.contador
2. Acumulador - Totalizador
*/
$contador = 0;
$respuesta = readline('Desea agregar productos al carrito? S=SI/N=NO: ');
$subtotal = 0;
$total = 0;
while(strtoupper($respuesta)=='S') {
    $contador++;
    echo "\n-----------------------------------------------\n";
    echo 'INFORMACION DEL PRODUCTO # ' . $contador . "\n";
    $precio = readline("Precio Producto: $ ");
    $cantidad = readline("Cantidad: ");

    /* PROCEDIMIENTO */
    $subtotal = $cantidad * $precio;
    $total += $subtotal;
    echo 'PAGO POR EL PRODUCTO: $ ' . $subtotal ."\n";
    $respuesta = readline('Desea agregar mas productos al carrito? S=SI/N=NO: ');
}

echo 'TOTAL A PAGAR: ' . $total;

?>