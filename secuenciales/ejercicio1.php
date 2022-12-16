<?php
//Escribir un programa que pregunte al usuario su nombre, apellido, DUI, edad, 
//teléfono y dirección, y que lo muestre en pantalla.

$nombre ="Oscar Alexander";
$apellido ="Ceron Hernandez";
$dui ="3435658-1";
$edad =20;
$telefono ="7199-2066";
$direccion ="Calle principal a santa maria ostuma";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Ejercicio 1-datos de la persona</title>
</head>
<body>
    <table border="1" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>DUI</th>
                <th>Edad</th>
                <th>Telefono</th>
                <th>Direccion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nombre." ".$apellido ?></td>
                <td><?php echo $dui ?></td>
                <td><?php echo $edad ?></td>
                <td><?php echo $telefono ?></td>
                <td><?php echo $direccion ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>