<?php
$host_db = "localhost";
$user_db = "id21596495_pedroadmin";
$pass_db = "PasswordDB1!";
$db_name = "id21596495_proyecto";
$tbl_name = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if (mysqli_connect_errno()) {
echo "Fallo";
exit();
}

?>
