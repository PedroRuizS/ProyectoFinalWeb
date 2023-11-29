<?php

include "conexiondb.php";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

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