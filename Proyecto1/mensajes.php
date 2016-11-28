<?php
session_start();
include("conexion.php");

	$res=$mysql->query("SELECT nombre,mensaje FROM conversacion ORDER BY id asc ");

  if($res){	
   		while($data=mysqli_fetch_assoc($res)){
   			echo "<p><strong>".$data["nombre"]." dice:</strong> ".$data["mensaje"]."</p>";
   		}
  }
  else{
  	echo "error";
  } 

?>