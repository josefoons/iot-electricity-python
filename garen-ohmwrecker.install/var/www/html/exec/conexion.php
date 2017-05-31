<?php
	
	
	$mysqli=new mysqli("localhost","garen","Jan1tza511","janitza511"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>
