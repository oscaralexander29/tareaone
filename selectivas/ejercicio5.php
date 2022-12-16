<?php
/*  5. Un obrero necesita calcular su salario semanal, el cual se obtiene de la siguiente manera:
Si trabaja 40 horas o menos se le paga $4 por hora.
Si trabaja más de 40 horas se le paga $4 por cada una de las primeras 40 horas y $6 por cada hora extra.
Calcule el nuevo salario del obrero.*/

$nombre='';
    $apellido='';
    $cantidadhoras=0;
    $precionormal=0.0;
    $precioextra=0.0;
/* proceso del ejercicio */
    $pagonormal=0;
    $pagoextra=0;
    $pagototal=0;
    $horasextras=0;

$meserror='';
if(isset($_POST[ 'procesar' ])){
    $nombre=$_POST[ 'nombre' ];
    $apellido=$_POST[ 'apellido' ];
    $cantidadhoras=$_POST[ 'hora' ];
    $precionormal=$_POST[ 'precio' ];
    $precioextra=$_POST[ 'precioextra' ];
    if(empty($nombre)||empty($cantidadhoras)){
      $meserror='<div class="alert alert-danger" role="alert">
      Campo Nombre o Horas Trabajadas requerido!
      </div>';
    }else { 

    if ($cantidadhoras>=0 && $cantidadhoras<=40){
        $pagonormal=$cantidadhoras*$precionormal;
    }else if($cantidadhoras>40){
        $pagonormal*$precionormal;
        $horasextras=$cantidadhoras-40;
        $pagoextra=$horasextras*$precioextra;
    }else{
      echo 'Error en los datos ingresados';
    }
  }
    $pagototal=$pagonormal+$pagoextra;
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
            <form action="ejercicio5.php" method="POST">
        <fieldset class="row g-3">
            <legend>DATOS DE EMPLEADO</legend>
            <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre de empleado</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
            </div>
 
            <div class="col-md-6">
            <label for="apellido" class="form-label">Apellido de empleado</label>
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese su apellido">
            </div>
        </fieldset>
        <fieldset class="row g-3">
          <legend>Horas de Trabajo y Pago por Hora</legend>
          <div class="col-md-4">
          <label for="hora" class="form-label">Cantidad de Horas Trabajadas</label>
          <input type="text" class="form-control" name="hora" id="hora" placeholder="0">
          </div>
  
          <div class="col-md-4">
          <label for="precio" class="form-label">Precio por Hora Normal</label>
          <input type="text" class="form-control" name="precio" id="precio" placeholder="0.00" value="4.00">
          </div>

          <div class="col-md-4">
          <label for="precioextra" class="form-label">Precio por Hora Extra</label>
          <input type="text" class="form-control" name="precioextra" id="precioextra" placeholder="0.00" value="6.00">
          </div>
        </fieldset>
  
          <div class="col-12 my-2">
          <button type="submit" name="procesar" class="btn btn-success">Procesar ✔</button>
          </div>
          </form>

            <?php echo $meserror;?>
          <div class="alert alert-primary" role="alert">
          <strong>Nombre completo</strong>
          <?php echo $nombre.' '.$apellido; ?>
          <br>
          <strong>Cantidad Horas Trabajadas </strong>
          <?php echo $cantidadhoras; ?>
          <br>
          <strong>Pago Hora Normal </strong>
          <?php echo $pagonormal; ?>
          <br>
          <strong>Pago Horas Extras </strong>
          <?php echo $cantidadhoras; ?>
          <br>
          <strong>Pago  Total </strong>
          <?php echo $pagototal; ?>
          <br>
          </div>
        </section>
    </main>

</body>
</html>