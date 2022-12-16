<?php
/* 6. En una tienda de descuento se efectúa una promoción en la cual se hace un descuento sobre el valor de la
compra total según el color de la bolita que el cliente saque al pagar en caja. Si la bolita es blanca no se le hará
descuento alguno, si es verde se le hará un 10% de descuento, si es amarilla un 25%, si es azul un 50% y si es roja
un 100%. Determinar la cantidad final que un cliente deberá pagar por su compra. Se sabe que sólo hay bolitas
de los colores mencionados. */
/* Entradas
    Valor de la compra = totalcompra
    color de la bolita = colorbolita
    
    condicion
    colordelabolita:
    blanca=0%
    verde=10%
    amarilla=25%
    azul=50%
    roja=100%
    
    procesos:
    descuento= totalcompra*porcentaje que depende del color de la bolita
    
    salidas:
    totalcompra
    colorbolitaseleccionada

    */
    $totalcompra=0;
    $descuento=0;
    $colorbolita='';
    $totalpago=0;
    if (isset($_POST[ 'procesar' ])){
        $totalcompra=$_POST[ 'totalcompra' ];
        $colorbolita=$_POST[ 'colorbolita' ];


switch($colorbolita){
    case 'blanca':
        $descuento=0;
        break;
    case 'verde':
        $descuento=$totalcompra*0.1;
        break;
    case 'amarilla':
        $descuento=$totalcompra*0.25;
        break;
    case 'azul':
        $descuento=$totalcompra*0.5;
        break;
    case 'roja':
        $descuento=$totalcompra*1;
        break;

    default:
    echo 'No existe color valida de la bolita seleccionada';
    break;
}
    $totalpago = $totalcompra - $descuento;

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
    <title>Calculo de horas de trabajo</title>
</head>
<body>
    <header class="container">
        <h2>CALCULAR SUELDO DE EMPLEADO SEGUN HORAS TRABAJADAS </h2>
    </header>
    <main class="container">
        <section>
            <h3>FORMULARIO DE REGISTRO</h3>
            <form action="ejercicio6.php" method="POST">
        
        <fieldset class="row g-3">
          <legend>REGISTRO DE COMPRAS CON DESCUENTO</legend>
          <div class="col-md-4">
          <label for="totalcompra" class="form-label">Total Compra</label>
          <input type="text" class="form-control" name="totalcompra" id="totalcompra" placeholder="0">
          </div>
  
          <div class="col-md-4">
          <label for="precio" class="form-label">Seleccione una Bolita</label>
          <select class="form-select" name="colorbolita" aria-label="Default select example">
            <option value="">Seleccione</option>
            <option value="blanca">blanca</option>
            <option value="verde">verde</option>
            <option value="amarilla">amarilla</option>
            <option value="azul">azul</option>
            <option value="roja">roja</option>
  
            </select>
            </div>

         
        </fieldset>
  
          <div class="col-12 my-2">
          <button type="submit" name="procesar" class="btn btn-success">Procesar ✔</button>
          </div>
          </form>

          <div class="alert alert-primary" role="alert">
          
          <strong>Total compra </strong>
          <?php echo $totalcompra; ?>
          <br>
          <strong>Color bolita seleccionada:</strong>
          <?php echo $colorbolita; ?>
          <br>
          <strong>Descuento</strong>
          <?php echo $descuento; ?>
          <br>
          <strong>Total a Pagar por el Cliente $: </strong>
          <?php echo "$ " .$totalpago; ?>
          <br>
          
          </div>
        </section>
    </main>

    </body>
</html>