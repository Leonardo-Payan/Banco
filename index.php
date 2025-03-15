<?php
  include("consultar.php");
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $usuario  = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    iniciarSesion($usuario,$contraseña);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <script src="funciones.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">        
    <div>
    <h1>Inicia sesión</h1>
        Usuario:    <input type="text" name="usuario"        required>
        Contraseña: <input type="password" name="contraseña" required>

      <div>
        <button type="submit">Ingresar</button>
      </div>
    </div>
  </form>

  <div>
  <h3>¿No estás registrado?</h3><br>
  </div>
  <div>
    <button onclick="pagina('registro')">Registrarse</button>
  </div>

</body>
</html>