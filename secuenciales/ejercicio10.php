<?php
/* Se pide crear un programa que calcule el porcentaje de alumnos y alumnas de un salón de clase. */

$alumnos = 0;
$alumnas = 0;
$total_alumnos = 0;
$porcentaje_alumnos = 0;
$porcentaje_alumnas = 0;
if (isset($_POST['enviar'])) {
    $alumnos = $_POST['alumnos'];
    $alumnas = $_POST['alumnas'];

    $total_alumnos = $alumnos + $alumnas;
    $porcentaje_alumnos = $alumnos * 100 / $total_alumnos;
    $porcentaje_alumnas = $alumnas * 100 / $total_alumnos;
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
    <title>ejercicio 10 - estructuras secuenciales</title>
</head>

<body>
    <header class="container">
        <h1>Calcular porcentaje de alumnos y alumnas en un salon de clase</h1>
    </header>

    <main class="container">
        <section>

            <form class="row gx-3 gy-2 align-items-center" method="POST" action="ejercicio10.php">
                <div class="col-sm-3">
                    <label for="alumnos" class="form-label">Cantidad de alumnos</label>
                    <input type="text" class="form-control" id="alumnos" name="alumnos" placeholder="0" required>
                </div>

                <div class="col-sm-3">
                    <label for="alumnas" class="form-label">Cantidad de alumnas</label>
                    <input type="text" class="form-control" id="alumnas" name="alumnas" placeholder="0" required>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary" name="enviar">Calcular</button>
                </div>
            </form>
            <br>
            <div class="alert alert-primary" role="alert">
                <h2>CALCULAR PORCENTAJE DE ALUMNOS Y ALUMNAS</h2>
                <hr>
                <strong>
                    Cantidad de alumnos:
                </strong>
                <?php echo $alumnos; ?>
                <br>
                <strong>
                    Cantidad de alumnas:
                </strong>
                <?php echo $alumnas; ?>
                <br>
                    <h3>Porcentaje de alumnos: </h3>
                <?php echo $porcentaje_alumnos ." %"; ?>
                <br><br>
                <h3>Porcentaje de alumnas: </h3>
                <?php echo $porcentaje_alumnas ." %"; ?>
            </div>
        </section>
    </main>
</body>

</html>