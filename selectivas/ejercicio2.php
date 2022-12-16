<?php 
/* 2. Dado el sueldo de un empleado, encontrar el nuevo sueldo si obtiene un aumento del 10% si su sueldo es
inferior a $600, en caso contrario no tendrá aumento.*/

$aumento=0;
$totalpago=0;
$nombre="";
$sueldo=0;

if(isset($_POST[ 'calcular' ])){ 
    $nombre =  $_POST[ 'nombre' ];
    $sueldo =  $_POST[ 'sueldo' ];
    
    if($sueldo<=660){
        $aumento=$sueldo*0.10;
    }

}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2- Estructuras Selectivas</title>
</head>
<body>
    <header>
        <h1>Estructuras Selectivas - Ejercicio 2</h1>
    </header>
    <main>
        <section>
            <h3>Sueldo del trabajador</h3>
            <form action="ejercicio2.php" method="post">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre"><br>
                <label for="sueldo">Sueldo $: </label>
                <input type="text" name="sueldo">
                <button type="submit" name="calcular">Calcular pago💻</button>
            </form>
            <table border="1">
                <thead>
                    <tr>
                        <th>Nombre del Empleado</th>
                        <th>Sueldo sin Descuento</th>
                        <th>Aumento</th>
                        <th>Total  pagar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $sueldo; ?></td>
                        <td><?php echo $aumento; ?></td>
                        <td><?php echo number_format($sueldo+$aumento,2); ?></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>