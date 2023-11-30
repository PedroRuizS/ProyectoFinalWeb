<?php
echo "Los datos del formulario son: " . print_r($_POST, true);
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>datos</title>
</head>
<body>
    <h1>Los datos de la base son</h1>

// Conectar a la base de datos
include "conexiondb.php";
mysqli_set_charset($conexion, 'utf8');

// Ejecutar la consulta SQL
$result = mysqli_query($conexion, "SELECT * FROM usuarios");

// Iterar sobre los resultados
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    // Mostrar los datos
    echo $row['id'] . " " . $row['nombre'] . " " . $row['telefono'] . " " . $row['correo'] . " " . $row['nombre_usuario'] . " " . $row['password'] . "<br />";
  }
} else {
  // No hay resultados
  echo "No hay resultados";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);


    

</body>
</html>
?>
