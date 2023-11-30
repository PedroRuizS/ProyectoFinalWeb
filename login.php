<?php
session_start();
?>
<!DOCTYPE html>


<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto Final Login</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
 <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #26a69a;">


<div style="background-color: white; text-align: center;">
  <form action="submit.php" method="post" class="col s12">
    <div class="row">
      <div class="input-field col s6">
        <input placeholder="Nombre Completo" id="nombre" type="text" class="validate" maxlength="250" name="nombre">
        <label for="nombre">Nombre Completo</label>
      </div>
      <div class="input-field col s6">
        <input placeholder="Telefono" id="telefono" type="text" class="validate" maxlength="250"  name="telefono">
        <label for="telefono">Telefono</label>
      </div>
      <div class="input-field col s6">
        <input placeholder="Nombre de Usuario" id="username" type="text" class="validate" maxlength="250"  name="username">
        <label for="nombre">Nombre de Usuario</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="password" type="password" class="validate" maxlength="10"  name="contrasena">
        <label for="password">Password</label>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate"  name="correo">
          <label for="email">Email</label>
        </div>
      </div>
    </div>

  </form>



</div>

  <script type="text/javascript" src="js/materialize.min.js"></script>

  <br /><br />
  <div style="text-align: center;">
    <input type="submit" name="submit" class="btn btn-primary" value="Registrarme" onclick="window.location.href='borrar.php'">
    <input type="reset" name="clear" class="btn btn-primary" value="Borrar" onclick="window.location.href='borrar.php'">

  </div>
</body>

</html>
