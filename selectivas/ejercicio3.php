<?php
/* En un hospital se ingresa un paciente cobrándole $25 diarios por hospitalización. 
Si el paciente es operado deberá además cancelar $1000 por los gastos más 20% 
del pago total por honorarios del doctor. Dados n días que estuvo el paciente, 
escriba el nombre, número de días que estuvo ingresado y el detalle de todos los pagos hechos. */
$name = '';
$dias = 0;
$pago_x_dias = 0;
$operado = '';
$pago_operado=0;
$pago_final = 0;
$estado = '';
$honorarios = 0;


if (isset($_POST['enviar'])) {
    $name = $_POST['name'];
    $dias = $_POST['dias'];
    $estado = $_POST['estado'];

    $pago_x_dias = $dias * 25;
    
    switch($estado){
        case 'operado':
            $pago_operado = 1000;
            $honorarios = ($pago_x_dias + $pago_operado) * 0.2;
            break;
        case 'noOperado':
            $pago_total = $pago_x_dias;
            break;
        default:
        echo 'No existe color valida de la bolita seleccionada';
        break;
    }
    $pago_final = $pago_x_dias + $pago_operado + $honorarios;

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
    <title>Ejercicio 3 - estructuras selectivas</title>
</head>

<body>
    <header class="container">
        <h2>Pagos a un hospital</h2>
    </header>
    <main class="container">
        <section>
            <form class="row gx-3 gy-2 align-items-center" method="POST" action="ejercicio3.php">
                <div class="col-sm-3">
                    <label for="name" class="form-label">Nombre del paciente</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
                </div>

                <div class="col-sm-3">
                    <label for="dias" class="form-label">Numero de dias ingresado</label>
                    <input type="number" class="form-control" id="dias" name="dias"  required>
                </div>

                <div class="col-sm-3">
                <label for="menu" class="form-label">Estado del paciente</label>
                    <select class="form-select" name="estado" aria-label="Default select example">
                        <option value="operado">operado</option>
                        <option value="noOperado">no operado</option>
                    </select>                 
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
                    Nombre paciente:
                </strong>
                <?php echo $name; ?>
                <br>
                <strong>
                    Numero de dias ingresado: 
                </strong>
                <?php echo $dias; ?>
                <br>
                <strong>
                    Total pago por los dias ingresado: $
                </strong>
                <?php echo $pago_x_dias; ?>
                <br>
                <strong>
                    Operacion: 
                </strong>
                <?php echo "$ " .$pago_operado; ?>
                <br>
                <strong>
                    Honorarios: 
                </strong>
                <?php echo "$ " .$honorarios; ?>
                <br><br>
                <h3>Total a pagar: </h3>
                <?php echo "$ " . $pago_final ?>
            </div>
        </section>
    </main>
</body>

</html>