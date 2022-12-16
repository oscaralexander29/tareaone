<?php
/* Calcular el perímetro y área de un rectángulo dada su base y su altura. */
//Variables

$base=15;
$h=10;

$perimetro= $base + $base + $h + $h;
$area= $base*$h;

echo "La base del rectangulo es de: " .$base ."<br>";
echo "La altura del rectangulo es: " .$h ."<br>";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <table border="1" width="100%">
    <thead>
            <tr>
                <th>PERIMETRO</th>
                <th>AREA</th
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $perimetro; ?></td>
                <td><?php echo $area; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>