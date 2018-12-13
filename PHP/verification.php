<?php
	$mail = $_POST["email"];
	$pass = $_POST["password"];
	include "database.php";
	
	$mysqli = new mysqli($hostname, $username, $password, $database);

	if ($mysqli->connect_errno) {
	    echo "Lo sentimos, este sitio web está experimentando problemas.";
	    echo "Error: Fallo al conectarse a MySQL debido a: \n";
	    echo "Errno: " . $mysqli->connect_errno . "\n";
	    echo "Error: " . $mysqli->connect_error . "\n";
	    exit;
	}

	$sql = "SELECT ID, NOMBRES, APELLIDO_PATERNO, APELLIDO_MATERNO, EMAIL, PASSWORD, TITLE FROM usuarios WHERE EMAIL = '$mail'";
	if (!$resultado = $mysqli->query($sql)) {
	    echo "Lo sentimos, este sitio web está experimentando problemas.";
	    exit;
	}

	while ($usuarios = $resultado->fetch_assoc()) {
		$id      = $usuarios['ID'];
	    $name    = $usuarios['NOMBRES'];
	    $apellido1    = $usuarios['APELLIDO_PATERNO'];
	    $apellido2    = $usuarios['APELLIDO_MATERNO'];
	    $hash_BD = $usuarios['PASSWORD'];
	    $mailBD  = $usuarios['EMAIL'];
	    $title 	 = $usuarios['TITLE'];
	}

	$resultado->free();
	$mysqli->close();

	if ((password_verify($pass, $hash_BD)) && ((strtoupper($mail)) == $mailBD )) {	
	    switch ($title) {
		    case "ADMINISTRADOR":
		    	session_start();
				$_SESSION["user"] = $apellido1.$apellido2.$id;
		        header('Location: ../index.php');
		        break;
		    case "CLIENTE":
		    	session_start();
				$_SESSION["user"] = $apellido1.$apellido2.$id;
		        header('Location: ../index.php');
		        break;
		    case "PROVEEDOR":
		    	session_start();
				$_SESSION["user"] = $apellido1.$apellido2.$id;
		        header('Location: ../index.php');
		        break;
		}
	} else {
		header('Location: ../HTML/login.html');
		}

?>