<?php
	include('conexion.php');
	$correo = $_POST["txtcorreo"];
	$pass 	= $_POST["txtpassword"];
	$queryusuario = mysqli_query($conn,"SELECT * FROM poject_25_login WHERE correo ='$correo' and pass = '$pass'");
	$nr 		= mysqli_num_rows($queryusuario);  	
	if ($nr == 1)  
	{ 
		echo	"<script> alert('El usuario inicio sesión correctamente.');window.location= 'index.html' </script>";
	}
	else
	{
		echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'index.html' </script>";
	}
?>