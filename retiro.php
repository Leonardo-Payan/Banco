<?php
  include("consultar.php");
  $nombre = consultarDatos("nombre");
  $saldo  = consultarDatos("saldo");
  if( $_SERVER["REQUEST_METHOD"] == "POST"  &&  !empty($_POST["retiro"])) //[TRUE]sí detecta POST
  {   
    $retiro  = $_POST["retiro"];
    
    if($retiro > 0  &&  $retiro  <=  $saldo)
    { 
      $saldo  -=  $retiro;
      actualizarRegistro("saldo",$saldo);
    }
    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retiro</title>
  <script src="funciones.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>BANCO CITIPAYAMEX</h1>
    <h2>     Nombre: <?php echo $nombre ?></h2>
    <h2>Saldo actual: <?php echo $saldo  ?></h2>
    <h3>seleccione la cantidad que desea retirar</h3>
      <div>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
          <button type="submit" name="retiro" value="50" >50 </button>
          <button type="submit" name="retiro" value="100">100</button>
          <button type="submit" name="retiro" value="150">150</button>
          <button type="submit" name="retiro" value="200">200</button>
          <button type="submit" name="retiro" value="250">250</button>
          <button type="submit" name="retiro" value="300">300</button>
        </form>
      </div>
      <br><br>
      <div>
        <button onclick="pagina('menu'   )">VOLVER  </button>
      </div>
</body>
</html>