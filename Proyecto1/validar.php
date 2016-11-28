<?php
include('conexion.php');


if($_POST['usuario']!="" ){
		$nombre =$_POST['usuario'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$resultado=$mysql->query("SELECT * FROM usuario WHERE user='$nombre'");

		$filas=$resultado->fetch_all();

	if(count($filas)==1){
		echo "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times</button>el usuario <strong>'$nombre'</strong> ya existe ingresa otro</div>";
	
	}
	else{
		$mysql->query("INSERT INTO usuario (user,password,email) VALUES ('$nombre','$password','$email')");

		echo "0";
}
}
else{
		echo "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times</button> llena todos los campos </div>";
	
}

?>