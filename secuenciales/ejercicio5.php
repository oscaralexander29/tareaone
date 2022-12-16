<?php
/* Escribir un programa que convierta un valor dado en grados Fahrenheit a grados Celsius. 
Recordar que la fórmula para la conversión es: C = (F-32) *5/9 */

$celsius = 0;
$fahrenheit = 0;
if (isset($_POST['enviar'])) {

    $fahrenheit = $_POST['fahrenheit'];

    $celsius = ($fahrenheit - 32) * 5 / 9;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>ejercicio 5 - estructuras secuenciales</title>
</head>

<body>

    <header class="container">
        <h1>CONVERTIR GRADOS FAHRENHEIT A GRADOS CELSIUS</h1>
    </header>

    <main class="container">
        <section>

            <form class="row gx-3 gy-2 align-items-center" method="POST" action="ejercicio5.php">
                <div class="col-sm-3">
                <label for="fahrenheit" class="form-label">Ingrese los grados fahrenheit</label>
                    <input type="text" class="form-control" id="fahrenheit" name="fahrenheit" placeholder="0" required>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary" name="enviar">convertir</button>
                </div>
            </form>
            <br>
            <div class="alert alert-primary" role="alert">
                <h2>GRADOS FAHRENHEIT A GRADOS CELSIUS</h2>
                <hr>
                <strong>
                    Grados fahrenheit: 
                </strong>
                <?php echo $fahrenheit ." °F"; ?>
                <br>
                <strong>
                    Grados celsius: 
                </strong>
                <?php echo $celsius ." °C"; ?>
            </div>
        </section>
    </main>
</body>

</html>