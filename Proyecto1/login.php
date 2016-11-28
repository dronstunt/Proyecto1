<?php
session_start();
if(isset($_SESSION['nombre'])){
	header("location:principal.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script scr="js/jquery.min.js"></script>
	<link rel="icon" type="image/png" href="imagenes/logo.png">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
		$(function(){
			$('#login').click(function(e){
				var usuario=$('#usuario').val();
				var password=$('#pass').val();
				$.ajax({
					url:'validarLogin.php',
					type:'post',
					data:{usuario:usuario,password:password},
					success:function(data){
						if(data=="1"){
							$(location).attr("href","principal.php");
						}
						
							$('#error').html(data);
						
					}
				});
				e.preventDefault();
				e.stopPropagation();
	   			e.stopInmediatePropagation(); 
			});
		});
	</script>
</head>
<body>
	
	<form>
  <div class="form-group">
	
	<div class="continer ">

		
		  <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-3 col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-offset-.5 col-sm-6">
		   <div class="row">
		  	<div class="col-xs-6 col-xs-offset-3 col-md-10 col-md-offset-1 col-sm-8  col-sm-offset-2 col-lg-10 col-lg-offset-1">
		  		<img src="imagenes/logo.png" class="img-responsive">
		  	</div>
		  	</div>
			<form action="principal.html" method="post">
				<div class="form-group">
					<input type="text" name="usuario"  id="usuario" placeholder="USUARIO" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="pass" id="pass" placeholder="PASSWORD" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" name="login"  id="login" class="btn  btn-success" value="Login">
				</div>
				<a href="formulario.php">¿No estas registrado?</a>
				<div id="error"></div>
			</form>
			</form>
		
	</div>
</body>
</html>