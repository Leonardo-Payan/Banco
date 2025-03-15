<?php
  include("consultar.php");
  $nombre = consultarDatos("nombre");
  $saldo  = consultarDatos("saldo");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BANCO CITIPAYAMEX</title>
  <script src="funciones.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Bienvenido a CITIPAYAMEX</h1>
  <h2>     Usuario: <?php echo $nombre ?></h2>
  <h2>Saldo actual: <?php echo $saldo  ?></h2>
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