<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
 <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: darkred;">
<!-- me costo un huevo hacer que esa madre de el insert de el formulario sirviera, por eso hice una funcion -->
<!-- que insertara datos predeterminados, alch no lo quise quitar por si acaso pero si quite el boton que hace el insert -->
  <?php
    include "conexiondb.php";
    mysqli_set_charset($conexion, 'utf8');

    $datos = array(
      'id' => 1,
      'nombre' => 'Juan papu',
      'telefono' => '1234567890',
      'correo' => 'juan.papu@correo.com',
      'nombre_usuario' => 'juanpapu',
      'password' => '123456'
    );

    function insertar_datos_predeterminados($datos) {
      $consulta = "INSERT INTO usuarios (id, nombre, telefono, correo, nombre_usuario, password) VALUES (?, ?, ?, ?, ?, ?)";
      $stmt = $conexion->prepare($consulta);
      $stmt->bind_param("issssi", $datos['id'], $datos['nombre'], $datos['telefono'], $datos['correo'], $datos['nombre_usuario'], $datos['password']);
      $stmt->execute();
    }
  ?>
<h1 class="h2" style="text-shadow: 10px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-align: center;color: aliceblue;">Login</h1>
<br> 
<form action="submit.php" method="post">

    <div style="display: flex; justify-content: center; background-color: aliceblue;"> 
    <table>
      <tr>
        <th>
        <input   type="text" name="nombre" placeholder="Nombre" >
        </th>
        <th>
          <input   type="text" name="telefono" placeholder="Teléfono">

        </th>
      </tr>
      <tr>
        <input class="validate" type="text" name="correo" placeholder="Correo electrónico">
      </tr>
      <tr>
        <th>
          <input class="validate" type="text" name="nombre_usuario" placeholder="Nombre de usuario">

        </th>
        <th>
          <input class="validate" type="password" name="password" placeholder="Contraseña">

        </th>
      </tr>
    </table>
  </div> 
    
<div style="display: flex; justify-content:center ;">
    <button type="submit" class="btn btn-primary">Enviar</button>
    <input type="reset" name="clear" class="btn btn-primary" value="Borrar" onclick="window.location.href='borrar.php'">
</div>

<!-- <input type="button" value="Insertar datos predeterminados" onclick="insertar_datos_predeterminados()"> -->
<a href="index.html">index</a>
  </form>

</body>
</html>
