<?php
  //mysqli_report(MYSQLI_REPORT_OFF); // Excepciones deshabilitadas
                          //nombre
  function  consultarDatos($columna) 
  {
    include("conexion.php");

    if($conexion)
    {        
                       //nombre       registros                   Marcos
      $query  = "SELECT $columna FROM $nombreTabla WHERE nombre='$nombre'";

      if(($resultadoConsulta  = mysqli_query($conexion,$query)) !== false)//consultar
      {
        $datos = mysqli_fetch_assoc($resultadoConsulta);//tabla -> array asociativo
        return $datos[$columna]; 
      }

    }
    mysqli_close($conexion);

  }

  function  actualizarRegistro($columna,$nuevoDato)
  {
    include("conexion.php");

    if($conexion)
    {                    //registros  |      saldo  = $saldo±=retiro/deposito
      $query  =  "UPDATE $nombreTabla SET $columna = $nuevoDato  WHERE nombre='$nombre'";
      if (mysqli_query($conexion,$query))
      { 
        echo "<script>
                alert('Operación exitosa! Nuevo dato: $nuevoDato');
              </script>";
      } 
      else 
      {
        echo "<script>
                alert('LA CONSULTA FALLÓ, revisa consultar.php');
              </script>";
      }

    }
    else
    {
         echo "<script>
                alert('LA CONEXION FALLÓ, revisa consultar.php');
              </script>";     
    }
    mysqli_close($conexion);  

  }

  function  iniciarSesion($usuario,$contraseña)
  {
    include("conexion.php");

    if($conexion)
    {
      $query  = "SELECT * FROM $nombreTabla WHERE usuario='$usuario'";
      if($resultadoConsulta = mysqli_query($conexion,$query))
      {
        $row = mysqli_fetch_assoc($resultadoConsulta);

        if ($row && password_verify($contraseña, $row["contraseña"])) 
        {
          echo "<script>
                  alert('Bienvenido {$row['nombre']}');
                  window.open('menu.php', '_self');
                </script>";
        } 
        else
        {
          echo "<script>
                  alert('Usuario o contraseña incorrecto');
                </script>"; 
        }
      }
    }
    mysqli_close($conexion);    
  }
?>