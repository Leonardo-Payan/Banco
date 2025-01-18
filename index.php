<?php
  include("conexion.php");
  if($conexion)
  {
    $query  = "SELECT * FROM  usuarios WHERE nombre='Juan'";
    $consultar = mysqli_query($conexion,$query);
    if($consultar)
    {
      $fila   = mysqli_fetch_row($consultar);
      $nombre = $fila[1];
      $saldo  = $fila[2];
      echo  "Usuario: $nombre <br>";
      echo  "Saldo:   $saldo ";
    }  
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BANCO CITIPAYAMEX</title>
  <script src="funciones.js"></script>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
  <h1>Bienvenido a CITIPAYAMEX</h1>
  <div>
    <button onclick="pagina('retiro'   )">RETIRAR  </button>
    <button onclick="pagina('consultar')">CONSULTAR</button>
    <button onclick="pagina('depositar')">DEPOSITAR</button>
    <button onclick="pagina('pagarServicios')">PAGAR SERVICIOS</button> 
    <button onclick="pagina('transferencias')">TRANSFERENCIA  </button>
    <button onclick="pagina('recarga'       )">RECARGA        </button>
  </div>
</body>
</html>