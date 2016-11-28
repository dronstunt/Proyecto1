<?php
session_start();
include("conexion.php");

if(isset($_SESSION['nombre'])){
	header("location:principal.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="imagenes/logo.png">
	<script src="js/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>

	
	$(function(){
	  $('#enviar').click(function(e){	
		var user=$('#user').val();
		var pass=$('#password').val();
		var pass2=$('#password2').val();
		var email=$('#email').val();
		
		/*if(pass!=pass2){

			$('#error').html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times</button> la contraseña tiene que se la misma </div>");
			e.preventDefault();
			e.stopPropagation();
			e.stopInmediatePropagation(); 
		}
		*/
		$.ajax({
			url:'validar.php',
			type:'POST',
			data:{usuario:user,password:pass,email:email},
			beforeSend:function(){
				$('#enviar').val('Conectando...');
			},
			success:function(res){
					$('#enviar').val('enviar');
				if(res=="0"){
					$(location).attr("href","login.php");
				}
					$('#error').html(res);

				
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
	<div class="container ">
	 <div class="row">
	  <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-3 col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-offset-.5 col-sm-6">
	  <div class="row">
		  	<div class="col-xs-6 col-xs-offset-3 col-md-10 col-md-offset-1 col-sm-8  col-sm-offset-2 col-lg-10 col-lg-offset-1">
		  		<img src="proyecto/logo.png" class="img-responsive">
		  	</div>
		<form method="post">
			<div class="form-group">
				<input type="text" name="user" placeholder="USUARIO" id="user" required="" class="form-control">
			</div>
			<div class="form-group">
				<input type="password" name="pass" id="password" placeholder="PASSWORD" required="" class="form-control">
			</div>
			<div class="form-group">
				<input type="password" name="pass2" id="password2" placeholder="CONFIRM PASSWORD" required="" class="form-control">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" placeholder="E-MAIL" required="" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" id="enviar" name="enviar" class="btn btn-success">
			</div>
			<div id="error"></div>
		</form>
	  </div>	
	</div>
	</div>
</body>
</html>
