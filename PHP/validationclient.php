<?php 

	require_once '../APP/init.php';
	$response = $recaptcha -> verify($_POST['g-recaptcha-response']); 

	$name = $_POST["name"];
	$apellido1 = $_POST["apellido1"];
	$apellido2 = $_POST["apellido2"];
	$email = $_POST["email"];
	$pass1 = $_POST["password"];
	$pass2 = $_POST["password2"];

	include "database.php";	
	$mysqli = new mysqli($hostname, $username, $password, $database);

	$name = strtoupper($name);
	$apellido1 = strtoupper($apellido1);
	$apellido2 = strtoupper($apellido2);
	$email = strtoupper($email);

	function email($mail){
		ini_set( 'display_errors', 1 );
		error_reporting( E_ALL );
		$from = "registro@turistearaucania.cl";
		$to = $mail;
		$subject = "Registro";
		$message =  "Probando todo	";
		$headers = "From:" . $from;
		mail($to,$subject,$message, $headers);
		echo $mail; 
	}
	function encript($password){
		$options = [
		  'cost' => 12
		];
		return(password_hash($password, PASSWORD_BCRYPT, $options));
	}


	//Errores en formulario
	if($pass1!=$pass2){
		echo "Error";
		//SE DEBE MODIFICAR ESTO
		
	}else{
		$pass1 = encript($pass1);

		if($response->isSuccess()){

			if ($mysqli->connect_errno) {
			    echo "Lo sentimos, este sitio web está experimentando problemas.";
			    echo "Error: Fallo al conectarse a MySQL debido a: \n";
			    echo "Errno: " . $mysqli->connect_errno . "\n";
			    echo "Error: " . $mysqli->connect_error . "\n";
			    exit;
			}


			$sql = "SELECT ID FROM usuarios WHERE EMAIL = '$email' ";
			$resultado = $mysqli->query($sql);
			$fila = $resultado->fetch_assoc();
			if ($fila['ID']!=""){
				echo"Se encontro";
			}else{
				
				    mysqli_query($mysqli, "INSERT INTO usuarios(NOMBRES, APELLIDO_PATERNO, APELLIDO_MATERNO, EMAIL, PASSWORD, TITLE, STATUS) VALUES ('$name', '$apellido1', '$apellido2', '$email', '$pass1', 'CLIENTE', 'WAITING')");
				    exit;
				
			}
			mysqli_close($mysqli);

			//email($email);


		}else{
			header('Location: ../HTML/accountcreation.html');
		}
	}
	

?>