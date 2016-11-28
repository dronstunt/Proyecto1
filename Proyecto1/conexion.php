<?php
$mysql=new mysqli("localhost","root","","proyecto");
if($mysql->connect_errno){
	echo("ocurrio un error no se pudo conectar a la base de datos ".$mysql->connect_errno);
}
else{
	
}

?>