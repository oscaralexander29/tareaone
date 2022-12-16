<?php
/* Una tienda ofrece un descuento del 15% sobre el total de la compra 
y un cliente desea saber cuánto deberá pagar finalmente por su compra. */

$nombre = '';
$compra = 0;
$descuento = 0;
$pago_final = 0;
if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $compra = $_POST['compra'];

    $descuento = $compra * 0.15;
    $pago_final = $compra - $descuento;
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
    <title>ejercicio 8 - estructuras secuenciales</title>
</head>

<body>
    <header class="container">
        <h1>Calcular descuentos a un cliente</h1>
    </header>

    <main class="container">
        <section>

            <form class="row gx-3 gy-2 align-items-center" method="POST" action="ejercicio8.php">
                <div class="col-sm-3">
                    <label for="nombre" class="form-label">Ingrese el nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="name" required>
                </div>

                <div class="col-sm-3">
                    <label for="compra" class="form-label">Ingrese el total de la compra</label>
                    <input type="text" class="form-control" id="compra" name="compra" placeholder="0.00" required>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary" name="enviar">Efectuar</button>
                </div>
            </form>
            <br>
            <div class="alert alert-primary" role="alert">
                <h2>Detalles</h2>
                <hr>
                <strong>
                    Nombre:
                </strong>
                <?php echo $nombre; ?>
                <br>
                <strong>
                    Total de la compra: $
                </strong>
                <?php echo $compra; ?>
                <br>
                <strong>
                    Descuento sobre la compra: $
                </strong>
                <?php echo $descuento; ?>
                <br><br>
                <h3>Total a pagar: </h3>
                <?php echo "$ " . $pago_final ?>
            </div>
        </section>
    </main>
</body>

</html>