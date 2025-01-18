<?php
  mysqli_report(MYSQLI_REPORT_OFF); // Deshabilita las excepciones de MySQL

  $consultar  = mysqli_query($conexion,$query);

  if($consultar)
  {
    echo "<script>
            alert('Operación exitosa!');
            window.open('menu.php', '_self');
         </script>";
  }
  else 
  {
      echo "<script>
              alert('Parece que hubo un problema, intentalo de nuevo...');
              history.back();
            </script>";
  }
  mysqli_close($conexion);
?>