<?php
include('conexion.php');

	if(isset($_POST['enviar'])){
		$pass=$_POST['pass'];
		$pass2=$_POST['pass2'];
		$user=$_POST['usuario'];
		$email=$_POST['email'];
		$result=$mysql->query("SELECT * FROM usuario WHERE user='$user' ");
		if(count($result->fetch_all())>0){
			echo "el usuario ya existe";
			header("location:formulario.html");
		}
		if($pass==$pass2){
		$mysql->query("INSERT INTO usuario (user,password,email) VALUES ('$user','$pass','$email')");
		}
		
		 
		
		
	}

?>