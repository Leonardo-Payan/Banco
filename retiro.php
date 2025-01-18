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
  if( $_SERVER["REQUEST_METHOD"] ==  "POST" ) //sí detectamos un POST (el de abajo)
  {
    $retiro  = $_POST["retiro"];
    if( $retiro!=""  )//verifico que haya metido algo
    {
      

      if($conexion)//abrimos y confirmamos conexión
      {
        $query  = "SELECT saldo FROM $nombreTabla WHERE nombre='juan'";//queremos saldo de JUAN
        $consultar_saldo  = mysqli_query($conexion,$query);

        if($consultar_saldo)//sí logramos consultar
        {
          $fila = mysqli_fetch_row($consultar_saldo);//gracias a fetch podemos acceder por índices 
          $saldo = $fila[0];//saldo de juan

          if($retiro  <=  $saldo)
          {
            $saldo  = $saldo - $retiro;
            $query  = "UPDATE $nombreTabla  SET saldo = $saldo  WHERE nombre='juan'";
            $actualizar_saldo  = mysqli_query($conexion,$query);

            if ($actualizar_saldo) // Si la actualización fue exitosa
            { 
              echo "Retiro exitoso. Tu nuevo saldo es: $saldo";
            } 
            else 
            {
              echo "Error al actualizar el saldo. Intenta nuevamente.";
            }
          }
          else
          {
            echo "<script>
                    alert('Saldo insuficiente para realizar el retiro');
                  </script>";
          }
        }
        mysqli_close($conexion);
      }
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
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
  <h1>BANCO CITIPAYAMEX</h1>
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
        <button onclick="pagina('index'   )">VOLVER  </button>
      </div>
</body>
</html>