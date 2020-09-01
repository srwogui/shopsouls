<?php

include 'conexion.php';

$Nombre =$_POST['Nombre'];
$IdSocio =$_POST['IdSocio'];
$fecha =$_POST['fecha'];
$Usuario =$_POST['Usuario'];
$id =rand(1,9999);


$SQL_CREATE= "INSERT INTO registro torneo 
VALUES('$Nombre' , '$IdSocio' , '$fecha' , '$Usuario' ,'$id' )";

mysqli_query($conn , $SQL_CREATE);

header('location:index.html');

?>