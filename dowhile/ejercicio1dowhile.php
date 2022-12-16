<?php
/* En una librería, los clientes hacen pedidos de libros, cuadernos y revistas con las condiciones siguientes: los
libros tienen un descuento del 22%, las revistas del 16% y los cuadernos del 10%. Los datos que se ingresan
para cada tipo de artículo son: la cantidad pedida, el precio unitario y el tipo de pago. Si el pago es al contado,
se tiene un descuento de 6% en cualquiera de los casos. Calcular e imprimir el costo total del pedido
considerando el tipo de pago para cada cliente y el total que pagan al final del día N clientes. */
$contador = 0;
do {
    $contador++;
    echo "\n------------------------------------------------\n";
    echo "\n----------------INFORMACION DEL CLIENTE # " . $contador."\n";

    do {
        /* MENU */
        echo "1. Libros\n";
        echo "2. Revistas\n";
        echo "3. Cuadernos\n";
        $opcion = readline('Seleccione una opcion: ');


        $respuesta = readline('Desea hacer pedido de otro cliente? S=SI/N=NO: ');
    }while(strtoupper($respuesta)=='S');


    /* CLIENTES */
    $respuesta = readline('Desea hacer pedido de otro cliente? S=SI/N=NO: ');
}while(strtoupper($respuesta)=='S'); 


?>