<?php
/* En un supermercado se hace una promoción mediante la cual el cliente obtiene 
un descuento dependiendo de un número que escoge al azar. Si el número escogido 
es menor a 74 el descuento es del 15% sobre el total de la compra y si es mayor 
o igual a 74 es de 20%. Obtener cuánto dinero se le descuenta y el pago final. */
$nombre = '';
$descuento = 0;
$numero = 0;
$total_compra = 0;
$pago_final = 0;

if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $numero = $_POST['numero'];
    $total_compra = $_POST['compra'];

    if ($numero < 74) {
        $descuento = $total_compra * 0.15;
    }
    if ($numero >= 74) {
        $descuento = $total_compra * 0.2;
    }
    $pago_final = $total_compra - $descuento;

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
    <title>Ejercicio 4 estructuras selectivas</title>
</head>

<body>
    <header class="container">
        <h2>PROMOCION! Descuento por escoger un numero al azar</h2>
    </header>
    <main class="container">
        <section>
            <form class="row gx-3 gy-2 align-items-center" method="POST" action="ejercicio4.php">
                <div class="col-sm-3">
                    <label for="nombre" class="form-label">Ingrese el nombre del cliente</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="name" required>
                </div>

                <div class="col-sm-3">
                    <label for="compra" class="form-label">Ingrese el total de la compra</label>
                    <input type="text" class="form-control" id="compra" name="compra" placeholder="0.00" required>
                </div>

                <div class="col-sm-3">
                    <label for="numero" class="form-label">Digite un numero al azar</label>
                    <input type="text" class="form-control" id="numero" name="numero" placeholder="0" required>
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
                <?php echo $total_compra; ?>
                <br>
                <strong>
                    Su descuento por el numero escogido: $
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