<?php
  include "conexiondb.php";
mysqli_set_charset($conexion, 'utf8');

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contrasena = $_POST['password'];
$username = $_POST['nombre_usuario'];

$buscarUsuario = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
$result = $conexion->query($buscarUsuario);
$count = mysqli_num_rows($result);

if ($count == 1) {
  echo 'El nombre de usuario ya ha sido ocupado';
  header('Location: ./submit.php');
  exit;
}
// aqui hay un error, porque dice que el header no puede ser cambiado, pero si le cambio el codigo se rompe completamente
// la neta no se que paso y  me eche un buen tiempo intentando entonces ps la neta ni le muevo

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

echo "<br />" . "<h2>" . "Usuario creado exitosamente!" . "</h2>";
echo "<h4>" . "Bienvenido: " . $username . "</h4>" . "\n\n";
echo "<h5>" . "<a href='./login.php'>Registro</a>" . "</h5>";
?>