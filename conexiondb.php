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
mysqli_set_charset($conexion, "utf8");

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];

$query = "INSERT INTO usuarios (nombre, apellidos, email) VALUES ('$nombre', '$apellidos', '$email');";

mysqli_query($conexion, $query);

mysqli_close($conexion);
?>