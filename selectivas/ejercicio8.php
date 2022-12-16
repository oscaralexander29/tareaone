<?php
/* Leer como datos el modelo de un vehículo y su precio, determinar el valor final que debe 
pagar el comprador. El concesionario está haciendo descuentos, teniendo en cuenta el modelo 
con base en la siguiente tabla: 
MODELO    |    DESCUENTO
Volskwagen         8%
Toyota             9%
Hyundai            6%
Mazda              5%
*/
$modelo = '';
$precio=0;
$descuento=0;
$totalpago = 0;

    if (isset($_POST[ 'enviar' ])){
        $precio=$_POST[ 'precio' ];
        $modelo=$_POST[ 'modelo' ];


switch($modelo){
        case 'Volskwagen':
            $descuento = $precio * 0.08;
        break;
        case 'Toyota':
            $descuento = $precio * 0.09;
        break;
        case 'Hyundai':
            $descuento = $precio * 0.06;
        break;
        case 'Mazda':
            $descuento = $precio * 0.05;
        break;
}
    $totalpago = $precio - $descuento;

}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
    <title>ejercicio 8 - estructuras selectivas</title>
</head>
<body>
    <header class="container">
        <h2>Calcular descueto segun modelo de vehiculo</h2>
    </header>
    <main class="container">
        <section>
            <h3>FORMULARIO DE REGISTRO</h3>
            <form action="ejercicio8.php" method="POST">
        
        <fieldset class="row g-3">
          <legend>REGISTRO DE descuento en compra de Coche</legend>
          <div class="col-md-4">
          <label for="precio" class="form-label">Precio del vehiculo</label>
          <input type="text" class="form-control" name="precio" id="precio" placeholder="0">
          </div>
  
          <div class="col-md-4">
          <label for="precio_vehiculo" class="form-label">Seleccione el modelo de vehiculo</label>
          <select class="form-select" name="modelo" aria-label="Default select example">
            <option value="Volskwagen">Volskwagen</option>
            <option value="Toyota">Toyota</option>
            <option value="Hyundai">Hyundai</option>  
            <option value="Mazda">Mazda</option>
            </select>
            </div>
         
        </fieldset>
  
          <div class="col-12 my-2">
          <button type="submit" name="enviar" class="btn btn-success">Procesar</button>
          </div>
          </form>

          <div class="alert alert-primary" role="alert">
          <h2>Detalles!</h2>
          <strong>Precio del automovil </strong>
          <?php echo "$ " .$precio; ?>
          <br>
          <strong>Modelo seleccionado:</strong>
          <?php echo $modelo; ?>
          <br>
          <strong>Descuento</strong>
          <?php echo "$ " .$descuento; ?>
          <br>
          <strong>Valor a Pagar por el Cliente $: </strong>
          <?php echo "$ " .$totalpago; ?>
          <br>
          
          </div>
        </section>
    </main>

    </body>
</html>