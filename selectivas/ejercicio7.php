<?php
 /* Elaborar un sistema de facturación que pida el nombre del vendedor, nombre del cliente, fecha de factura,
número de factura y suma de ventas realizadas. A la suma de ventas realizadas, se les hará un descuento según
la siguiente tabla: 
0 < v < 100  -- 0%
100 <= v <= 500  -- 15%
500 < v <= 1000  -- 20%
v > 1000   -- 30%
*/

    $nombreV = '';
    $nombreC = '';
    $fechaf = '';
    $numf = '';
    $ventas = 0;
    $descuento = 0;
    $totalPagar = 0;

if (isset($_POST['enviar']))
{
    $nombreV = $_POST['nombreV'];
    $nombreC = $_POST['nombreC'];
    $fechaf = $_POST['fechaf'];
    $numf = $_POST['numf'];
    $ventas = $_POST['ventas'];


    if ($ventas > 0 && $ventas<100){
        $descuento = 0;
    } elseif ($ventas >= 100 && $ventas <=500){
        $descuento = $ventas * 0.15;
    } elseif ($ventas > 500 && $ventas <= 1000){
        $descuento = $ventas * 0.2;
    } else {
        $descuento = $ventas * 0.3;
    }
    $totalPagar = $ventas - $descuento;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Sistema de Facturacion</title>
</head>
<body>
    <header class="container">
        <h1>Sistemas de Facturacion</h1>
    </header>
    <main class="container">
    <form class="row g-3" method="POST" action="ejercicio7.php">
  <div class="col-md-6">
    <label for="nombreV" class="form-label">Nombre Vendedor</label>
    <input type="text" class="form-control" id="nombreV" name="nombreV" placeholder="Escriba el nombre del vendedor" required>
  </div>

  <div class="col-md-6">
    <label for="nombreC" class="form-label">Nombre Cliente</label>
    <input type="text" class="form-control" id="nombreC" name="nombreC" placeholder="Nombre del cliente">
  </div>

  <div class="col-md-6">
    <label for="fechaf" class="form-label">Fecha Factura</label>
    <input type="date" class="form-control" id="fechaf" name="fechaf" value="<?php echo date('Y-m-d'); ?>">
  </div>

  <div class="col-md-4">
    <label for="numf" class="form-label">Nº de Facturacion</label>
    <input type="text" class="form-control" id="numf" name="numf" placeholder="FACT-0001">
  </div>

  <div class="col-md-2">
    <label for="ventas" class="form-label">Ventas</label>
    <input type="text" class="form-control" id="ventas" name="ventas" placeholder="0.00">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="enviar">Calcular Facturacion</button>
  </div>
</form>

<div class="alert alert-primary" role="alert">
  <strong>
    Nombre Vendedor:
  </strong>
  <?php echo $nombreV; ?>
  <br>
  <strong>
    Nombre Cliente:
  </strong>
  <?php echo $nombreC; ?>
  <br>
  <strong>
    Fecha de Facturacion:
  </strong>
  <?php echo $fechaf;?>
  <br>
  <strong>
    Nº de Facturacion:
  </strong>
  <?php echo $numf;?>
  <br>
  <strong>
    Ventas: $ 
  </strong>
  <?php echo $ventas;?>
  <br>
  <strong>
    Descuento: $ 
  </strong>
  <?php echo $descuento;?>
  <br>
  <h3> 
  <strong>
  TOTAL A PAGAR ES: $ 
  </strong>
  <?php echo $totalPagar; ?>
</h3>
</div>
    </main>
</body>
</html>