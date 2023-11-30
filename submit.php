<?php
// Connect to the database
include "conexiondb.php";
mysqli_set_charset($conexion, 'utf8');

// Get form data
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$username = $_POST['username'];

// Check if username already exists
$buscarUsuario = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
$result = $conexion->query($buscarUsuario);
$count = mysqli_num_rows($result);

if ($count == 1) {
  echo 'El nombre de usuario ya ha sido ocupado';
  header('Location: ./login.php');
  exit;
}

// Insert new user into the database
mysqli_query($conexion, "INSERT INTO usuarios (
  nombre,
  telefono,
  correo,
  nombre_usuario,
  password
  )
VALUES(
  '$nombre',
  '$telefono',
  '$correo',
  '$username',
  '$contrasena'
  
)");

// Display success message and welcome message
echo "<br />" . "<h2>" . "Usuario creado exitosamente!" . "</h2>";
echo "<h4>" . "Bienvenido: " . $username . "</h4>" . "\n\n";
echo "<h5>" . "<a href='./login.php'>Registro</a>" . "</h5>";
?>