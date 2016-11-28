<!DOCTYPE html>
<html>
<head>
	<title></title>
 	<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
 	<script type="text/javascript" src="js/jquery.min.js"></script>
 	<link rel="icon" type="image/png" href="proyecto/logo.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/estilo.css">
 	<script type="text/javascript">
 		$(function(){
 		   	registrarmensajes();
 		   	$.ajaxSetup({"cache":false});
 		   	setInterval("mostrarMensajes()",500);
 		});
 		
 		function registrarmensajes(){
 			$('#enviar').click(function(e){
 				e.preventDefault();
 				var mensaje=$('#message').val();
 				
 				$.ajax({
 					url:"insertarMensaje.php",
 					type:"post",
 					data:{nombre:nombre,mensaje:mensaje},
 					success:function(data){
 						var tamaño=$("#contentWrap").prop("scrollHeight");
 						$('#message').val('');
 					$('#contentWrap').scrollTop(tamaño);
 						console.log(data);
 					}
 				});
 			});
 		}

 		function mostrarMensajes(){
 			$.ajax({
 				url:"mensajes.php",
 				type:"post",
 				success:function(data){
 					$('#contentWrap').html(data);
 					$('#contentWrap p:last-child').css({"background-color":"#98fb98","padding-botton":"20px"});

 					 var tamaño=$("#contentWrap").prop("scrollHeight");
 					$('#contentWrap').scrollTop(tamaño);
 				}
 			});
 		}
 	</script>

</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<a href="#" class="navbar-brand" id="nombre">
		<?php
			session_start();
				if(isset($_SESSION['nombre'])){
					echo "<script>\n";
					echo "nombre='".$_SESSION['nombre']."'\n";
					echo "</script>\n";
					echo "".$_SESSION['nombre'];
				}
				else{
					header("location:login.php");
				}
		?>
		</a>
		<ul class="nav navbar-nav ">
					<li>
						<a href="cerrar.php">salir</a>
					</li>
		</ul>
	</nav>
<div class="container">	
<div class="form-group">
<div class="col-md-12">
<div id="contentWrap">
</div>
</div>
</div> 
  <div class="col-xs-9 col-md-4 col-lg-4">
		<form id="send_message" method="post">
	   		<div class="form-group">
				<textarea id="message" name="" class="form-control" type="text" placeholder="mensaje"></textarea>
	   		</div>	
			<div class="form-group">
				<input type="submit" name="" id="enviar" class="btn btn-primary">
			</div>	
		</form>
	</div>	
	
 <div id="users"></div>
</div>

</body>
</html>