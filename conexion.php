<?php

  //Conexion principal a la Base de Datos

  $db_host="localhost";
  $db_nombre="db_plan";
  $db_usuario="root";
  $db_contra="";

  //$db_host="localhost";
  //$db_nombre="histodoc";
  //$db_usuario="root";
  //$db_contra="";

  try {
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
  } catch (\Exception $e) {
    die("Error: " . $e->getMessage());
  }

 ?>
