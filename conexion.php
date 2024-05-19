<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "gym";

$nombre = $_POST['nombre'];
$membresia = $_POST['membresia'];
$telefono = $_POST['telefono']; 

$conexion = mysqli_connect($servername,$username,$password,$database);

$sql = "INSERT INTO registro (nombre, membresia, telefono) values ('$nombre','$membresia','$telefono')";

if (mysqli_query($conexion, $sql))
{

?>
<h3 class="bien">Registro completado</h3>
<?php

}

?>
