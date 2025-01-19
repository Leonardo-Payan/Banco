<?php
  mysqli_report(MYSQLI_REPORT_OFF); // Excepciones deshabilitadas
                          //nombre
  function  consultarDatos($columna) 
  {
    include("conexion.php");

    if($conexion)
    {                   //nombre       usuarios                   Marcos
      $query  = "SELECT $columna FROM $nombreTabla WHERE nombre='$nombre'";

      if(($consultar_datos  = mysqli_query($conexion,$query)) !== false)//consultar
      {
        $datos = mysqli_fetch_assoc($consultar_datos);//tabla -> array asociativo
        return $datos[$columna]; 
      }

    }
    mysqli_close($conexion);

  }

  function  actualizarRegistro($columna,$nuevoDato)
  {
    include("conexion.php");

    if($conexion)
    {                    //usuarios  |      saldo    = $saldo±=retiro/deposito
      $query  =  "UPDATE $nombreTabla  SET $columna = $nuevoDato  WHERE nombre='$nombre'";

      if (mysqli_query($conexion,$query))
      { 
        echo "<script>
                alert('Operación exitosa! Nuevo dato: $nuevoDato')
              </script>";
      } 
      else 
      {
        echo "<script>
                alert('LA CONSULTA FALLÓ, revisa consultar.php')
              </script>";
      }

    }
    mysqli_close($conexion);  

  }
?>