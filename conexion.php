<?php
  $host = "localhost";
  $user = "root";
  $pwd  = ""; //password
  $db   = "citipayamex"; //database
  $port = "3306";

  $nombreTabla  = "usuarios";
  $nombre       = "Marcos";
  
  $conexion = mysqli_connect($host,$user,$pwd,$db,$port);//conectamos con SQL
  if(!$conexion) 
  {
    die("CONEXION FALLÓ, verifica conexion.php" . mysqli_connect_error());
  }
?>