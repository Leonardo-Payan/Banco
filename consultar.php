<?php
  mysqli_report(MYSQLI_REPORT_OFF); // Excepciones deshabilitadas

  function  consultarDatos($columna) //nombre
  {
    include("conexion.php");
    if($conexion)
    {                            //nombre       usuarios                   Marcos
      $query            = "SELECT $columna FROM $nombreTabla WHERE nombre='$nombre'";

      if(($consultar_datos  = mysqli_query($conexion,$query)) !== false)//consultar
      {
        $datos = mysqli_fetch_assoc($consultar_datos);//tabla -> array asociativo
      }
      return $datos[$columna];

    }
    mysqli_close($conexion);

  }

  function  actualizarRegistro($columna,$valor)
  {
    include("conexion.php");
    if($conexion)
    {
      $query             =  "UPDATE $nombreTabla  SET $columna = $valor  WHERE nombre='$nombre'";
      if (mysqli_query($conexion,$query)) // Si la actualización fue exitosa
      { 
        echo "<script>alert('Retiro exitoso! Tu nuevo saldo es $valor')</script>";
      } 
      else 
      {
        echo "<script>alert('LA CONSULTA FALLÓ, revisa consultar.php')</script>";
      }
    }
    mysqli_close($conexion);  
  }
?>