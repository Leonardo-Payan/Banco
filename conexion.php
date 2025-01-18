<?php
  $host = "localhost";
  $user = "root";
  $pwd = ""; //password
  $db   = "citipayamex"; //database
  $port = "3306";

  $nombreTabla  = "usuarios";
  
  $conexion = mysqli_connect($host,$user,$pwd,$db,$port);//conectamos con SQL
?>