<?php
/* 11. En un hospital existen tres áreas: Pediatría, Oncología y Traumatología. El presupuesto anual del hospital se
reparte conforme a la siguiente tabla: 
    pediatria - 30%
    oncologia - 40%
    traumatologia 30%
    */
$pediatria=0;
$oncologia=0;
$trauma=0;
if(isset($_POST[ 'procesar' ])){
    $presupuesto= $_POST[ 'presupuesto' ];

    $pediatria = $presupuesto*0.3;
    $oncologia = $presupuesto*0.4;
    $trauma = $presupuesto*0.3;
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
    <title>Ejercicio 11</title>
</head>
<body>
    <header class="container">
        <h2>Ejercicio 11</h2>
    </header>
    <main class="container">
        <section>
            <h4>Presupuesto Anual de El Hospital X</h4>
            <form action="ejercicio11.php" method="POST">
            <label for="presupuesto">Presupuesto</label>
            <input type="text" placeholder="$0.00" name="presupuesto">
            <button type="submit" name="procesar">Enviar🔐</button>
            </form>
            <hr>
            <table border="1">
                <thead>
                    <tr>
                        <th>PEDIATRIA</th>
                        <th>ONCOLOGIA</th>
                        <th>TRAUMATOLOGIA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>💰<?php echo number_format($pediatria,2)?></td>
                        <td>💰<?php echo number_format($oncologia,2)?></td>
                        <td>💰<?php echo number_format($trauma,2)?></td>
                    </tr>
                </tbody>
            </table>
        
        </section>
    </main>
  </div>
</body>
</html>