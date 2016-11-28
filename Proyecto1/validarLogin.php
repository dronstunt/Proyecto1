<?php
include("conexion.php");
session_start();
if($_POST['usuario']!="" && $_POST['password']!=""){
	$usuario=$_POST['usuario'];
	$password=$_POST['password'];

	$resultado=$mysql->query("SELECT * FROM usuario WHERE user='$usuario' AND password='$password'");

	if(count($resultado->fetch_all())==1){
		$_SESSION['nombre']=$usuario;
		echo "1";
	}
	else{
		echo "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times</button> El usuario o contraseña son incorrectos </div>";
	}

}


?>