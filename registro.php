<?php
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $nombre           = $_POST["nombre"];
    $apellido_paterno = $_POST["apellido_paterno"];
    $apellido_materno = $_POST["apellido_materno"];
    $usuario          = $_POST["usuario"];
    $contraseña       = password_hash($_POST["contraseña"],PASSWORD_DEFAULT);
    $email            = $_POST["email"];
    $telefono         = $_POST["telefono"];

    include("conexion.php");
    if($conexion)
    {
      $query  = "INSERT INTO $nombreTabla($campos) VALUES ('$nombre','$apellido_paterno','$apellido_materno','$usuario','$contraseña','$email','$telefono');";

      if($resultadoConsulta  = mysqli_query($conexion,$query))
      {
        echo "<script>
                alert('Registro exitoso!');
                window.open('index.php', '_self');
              </script>";
      }
      else
      {
        echo "<script>
                alert('Parece que hubo un problema');
                history.back();
              </script>";        
      }
      mysqli_close($conexion);
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="stylesheet" href="styles.css">
  <script src="funciones.js"></script>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">        
    <div>
      <h1>Registrate</h1>
        Nombre:           <input type="text" name="nombre"           required>
        Apellido paterno: <input type="text" name="apellido_paterno" required>
        Apellido materno: <input type="text" name="apellido_materno" required>
        Usuario:          <input type="text" name="usuario"          required>
        Constraseña:      <input type="password" name="contraseña"   required>
        Email:            <input type="email"    name="email"        required>
        Teléfono:         <input type="number"   name="telefono">
      <div>
                          <button type="submit">Ingresar</button>
      </div>
    </div>
</form>
<div>
  <button onclick="pagina('index')">VOLVER</button>
</div>
</body>
</html>