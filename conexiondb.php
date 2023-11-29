<?php
$host_db = "sql205.infinityfree.com ";
$user_db = "if0_35173712";
$pass_db = "kAwqOBFA8pbs";
$db_name = "if0_35173712_formulario";
$tbl_name = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
