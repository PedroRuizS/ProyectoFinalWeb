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
$username = $_POST["username"];
$email = $_POST["email"];
$sexo=$_POST["sexo"]


$query = "INSERT INTO usuarios (nombre,  email, username, sexo) VALUES ('$nombre',  '$email', '$sexo', '$username')";

mysqli_query($conexion, $query);
mysqli_close($conexion);
?>