<?php
  include("consultar.php");
  $usuario = consultarDatos("nombre");
  $saldo  = consultarDatos("saldo");
  if( $_SERVER["REQUEST_METHOD"] == "POST"  &&  !empty($_POST["deposito"])) //[TRUE]sí detecta POST
  {   
    echo "post dice: bloque activado!<br>";
    $deposito  = $_POST["deposito"];
    echo "post dice: deposito = $deposito<br>";
    if($deposito > 0)
    { 
      echo "post dice: deposito mayor a 0!<br>";
      $saldo  +=  $deposito;
      actualizarRegistro("saldo",$saldo);
      echo "post dice: función ejecutada!<br>";
    }  
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deposito</title>
  <script src="funciones.js"></script>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
  <h1>BANCO CITIPAYAMEX</h1>
    <h2>     Usuario: <?php echo $usuario ?></h2>
    <h2>Saldo actual: <?php echo $saldo  ?></h2>
    <h3>Seleccione la cantidad que desea depositar</h3>
      <div>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
          <button type="submit" name="deposito" value="50" >50 </button>
          <button type="submit" name="deposito" value="100">100</button>
          <button type="submit" name="deposito" value="150">150</button>
          <button type="submit" name="deposito" value="200">200</button>
          <button type="submit" name="deposito" value="250">250</button>
          <button type="submit" name="deposito" value="300">300</button>
        </form>
      </div>
      <br><br>
      <div>
          <button onclick="pagina('menu')">VOLVER</button>
      </div>
</body>
</html>