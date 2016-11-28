<?php
include("conexion.php");

//ingresar el mensaje en la base de datos 
$mensaje=$_POST['mensaje'];
$nombre=$_POST['nombre'];
$res=$mysql->query("INSERT INTO conversacion(nombre,mensaje) VALUES('$nombre','$mensaje')");

if($res){
	echo "mensaje registrado";
}
else {
	echo "no se ingreso";
}
?>