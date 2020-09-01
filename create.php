<?php

include 'conexion.php';

$nombre =$_POST['nombre'];
$correo =$_POST['correo'];
$contraseña =$_POST['contraseña'];
$usuario =$_POST['usuario'];
$direccion =$_POST['direccion'];
$ciudad =$_POST['ciudad'];
$postal =$_POST['postal'];
$telefono =$_POST['telefono'];
$id =rand(1,9999);


$SQL_CREATE= "INSERT INTO registro 
VALUES('$nombre' , '$correo' , '$contraseña' , '$usuario' , '$direccion' , '$ciudad' , '$postal' , '$telefono' ,'$id' )";

mysqli_query($conn , $SQL_CREATE);

header('location:index.html');

?>