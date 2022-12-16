<?php
/* Calcular la media de tres números pedidos por teclado. */
$media = 0;
$num1 = 0;
$num2 = 0;
$num3 = 0;

if (isset($_POST['enviar'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $media = ($num1 + $num2 + $num3) / 3;
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
    <title>ejercicio 6 - estructuras secuenciales</title>
</head>

<body>
    <header class="container">
        <h2>Calcular la media de tres números</h2>
    </header>
    <main class="container">
        <section>
            <form class="row gx-3 gy-2 align-items-center" method="POST" action="ejercicio6.php">
                <div class="col-sm-3">
                    <label for="num1" class="form-label">Ingrese el primer numero</label>
                    <input type="text" class="form-control" id="num1" name="num1" placeholder="0" required>
                </div>

                <div class="col-sm-3">
                <label for="num2" class="form-label">Ingrese el segundo numero</label>
                <input type="text" class="form-control" id="num2" name="num2" placeholder="0" required>
                </div>

                <div class="col-sm-3">
                <label for="num3" class="form-label">Ingrese el tercer numero</label>
                <input type="text" class="form-control" id="num3" name="num3" placeholder="0" required>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary" name="enviar">convertir</button>
                </div>
            </form>
            <br>
            <div class="alert alert-primary" role="alert">
                <h2>Calcular la media de tres numeros</h2>
                <hr>
                <strong>
                    Primer numero ingresado:
                </strong>
                <?php echo $num1; ?>
                <br>
                <strong>
                    Segundo numero ingresado:
                </strong>
                <?php echo $num2; ?>
                <br>
                <strong>
                    Tercer numero ingresado:
                </strong>
                <?php echo $num3; ?>
                <br>
                <h3>La media aritmetica de estos tres numeros es: </h3>
                <?php echo $media;?>
            </div>
        </section>
    </main>
</body>

</html>