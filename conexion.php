<?php
  $host = "localhost";
  $user = "root";
  $pwd  = ""; //password
  $db   = "citipayamex"; //database
  $port = "3306";

  $nombreTabla  = "registros";
  $nombre       = "Leonardo";
  $campos       = "nombre,apellido_paterno,apellido_materno,usuario,contraseña,email,telefono";
  
  $conexion = mysqli_connect($host,$user,$pwd,$db,$port);//conectamos con SQL

?>