<?php
$conn = new mysqli("localhost","id20329875_general_proyectos","P3a6W-hbaaSChttw","id20329875_general");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>