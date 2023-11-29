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
  <form action="conexiondb.php" method="post" class="col s12">
    <div class="row">
      <div class="input-field col s6">
        <input placeholder="Nombre Completo" id="nombre" type="text" class="validate" maxlength="250">
        <label for="nombre">Nombre Completo</label>
      </div>
      <div class="input-field col s6">
        <input placeholder="Nombre de Usuario" id="username" type="text" class="validate" maxlength="250">
        <label for="nombre">Nombre de Usuario</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="password" type="password" class="validate">
        <label for="password">Password</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="email" type="email" class="validate">
        <label for="email">Email</label>
      </div>
    </div>
  </form>

  <div class="row">
    <div class="col s12">
      <select id="sexo">
        <option value="">Selecciona tu sexo</option>
        <option value="m">Masculino</option>
        <option value="f">Femenino</option>
        <option value="x">Otro</option>
        <option value="z">Prefiero no decirlo</option>
      </select>
    </div>
  </div>

</div>

  <script type="text/javascript" src="js/materialize.min.js"></script>

  <br /><br />
  <div style="text-align: center;">
    <input type="submit" name="submit" class="btn btn-primary" value="Registrarme" onclick="window.location.href='borrar.html'">
    <input type="reset" name="clear" class="btn btn-primary" value="Borrar" onclick="window.location.href='borrar.html'">
  </div>
</body>

</html>
