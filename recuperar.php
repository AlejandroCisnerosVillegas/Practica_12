<?php
	require '../../assets/vendor/PHPMailer/src/PHPMailer.php';
	require '../../assets/vendor/PHPMailer/src/SMTP.php';
	require '../../assets/vendor/PHPMailer/src/Exception.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$correo = $_POST['txtcorreo'];
		include('conexion.php');
		$queryusuario = mysqli_query($conn,"SELECT * FROM poject_25_login WHERE correo = '$correo'");
		$nr = mysqli_num_rows($queryusuario); 
		if ($nr == 1) {
			$mostrar = mysqli_fetch_array($queryusuario); 
			$enviarpass = $mostrar['pass'];
			$paracorreo = $correo;
			$titulo = "Recuperar contraseña";
			$mensaje = $enviarpass;
			$tucorreo = "From: alex220496.acv@gmail.com";
			if(mail($paracorreo,$titulo,$mensaje,$tucorreo)) {
				echo "<script> alert('Contraseña enviada');window.location= 'index.html' </script>";
			} else {
				echo "<script> alert('Error');window.location= 'index.html' </script>";
			}
		} else {
			echo "<script> alert('Este correo no existe');window.location= 'index.html' </script>";
		}
	} else {
		echo "Método de solicitud no permitido.";
	}
?>