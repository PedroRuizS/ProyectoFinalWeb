<?php
include "conexiondb.php";
mysqli_set_charset($conexion,'utf8');



$buscarUsuario = "SELECT * FROM usuarios where nombre_usuario = '$_POST[nombre_usuario]'";

$result = $conexion -> query($buscarUsuario);
$count = mysqli_num_rows($result);

if($count ==1 ){
    echo'El nombre se usuario ya a sido ocupado';
    header('Location: ./login.php');
    
}else{
    mysqli_query($conexion, "INSERT INTO usuarios (
    nombre,
    username,
    email,
    sexo,
    fecha_registro,
    permisos,
    id
    password)
        VALUES(
     $nombre = $_POST["nombre"];
     $username = $_POST["username"];
     $email = $_POST["email"];
     $sexo=$_POST["sexo"] 
     date('Y-m-d'),
     1,
     (SELECT MAX(id) + 1 FROM usuarios)
    )");

echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
echo "<h4>" . "Bienvenido: " . $_POST['usuario'] . "</h4>" . "\n\n";
echo "<h5>" . "<a href='./form_registro.php'>Registro</a>" . "</h5>";

}



?>