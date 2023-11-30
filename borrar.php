<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>datos</title>
</head>
<body>

<?php

include "conexiondb.php";
?>

<h1>los datos de la base son</h1>

<?php
mysqli_set_charset($conexion, 'utf8');
$result = mysqli_query($conexion, "SELECT * FROM usuarios");

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id'] . " " . $row['nombre'] . " " . $row['telefono'] . " " . $row['correo'] . " " . $row['nombre_usuario'] . " " . $row['password'] . "<br />";
  }
} else {
  echo "No hay nada q mostrar";
}

mysqli_close($conexion);

?>

<h2>ingresa el id de el entry que quieres borrar</h2>

<?php

if (!empty($_POST)) {
  include "conexiondb.php";
  mysqli_set_charset($conexion, 'utf8');

  $id = $_POST['id'];
  $consulta = "DELETE FROM usuarios WHERE id = $id";
  $resultado = $conexion->query($consulta);

  if ($resultado) {
    echo "La entrada se ha borrado correctamente";
  } else {
    echo "Error al borrar la entrada: " . $conexion->error;
  }

  mysqli_close($conexion);
}

?>

<form action="borrar.php" method="post">
  <input type="number" name="id" placeholder="ID">
  <button type="submit">Borrar</button>
</form>
<a href="login.php">regresar al login</a>
</body>
</html>