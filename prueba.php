<?php

include "conexiondb.php";

$conexion = new mysqli($host_db = "sql205.infinityfree.com", $user_db = "if0_35173712", $pass_db = "kAwqOBFA8pbs", $db_name = "if0_35173712_formulario");

if ($conexion->connect_error) {
  die("La conexion falló: " . $conexion->connect_error);
}

$result = $conexion->query("SELECT 1;");

if ($result->num_rows == 1) {
  echo "La conexión a la base de datos se ha realizado correctamente.";
} else {
  echo "La conexión a la base de datos no se ha realizado correctamente.";
}

$conexion->close();

?>