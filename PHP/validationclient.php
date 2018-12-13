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


	$name = strtoupper($name);
	$apellido1 = strtoupper($apellido1);
	$apellido2 = strtoupper($apellido2);
	$email = strtoupper($email);

	function email($mail,$name){
		ini_set( 'display_errors', 1 );
		error_reporting( E_ALL );
		$from = "registro@turistearaucania.cl";
		$to = $mail;
		$subject = "Registro de servicio en nuestra web";
		$message =  "Hola $name. <br><br> Recibimos una solicitud de registro en nuestra web turistearaucania.cl. Porfavor, confirma tu registro a traves del siguiente enlace turistearaucania.cl/confirmation.php. <br> Si recibio este mensaje por error ignorelo.<br><br> Atentamente: <br> El equipo de turistearaucania";
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
		//LA VALIDACION DE JAVASCRIPT FALLO. REENVIAR AL FORMULARIO CON DATOS NO PASSW PRECARGADOS
	}else{
		$pass1 = encript($pass1);
		if($response->isSuccess()){
			$sql = "SELECT ID FROM usuarios WHERE EMAIL = '$email' ";
			$resultado = $conex->query($sql);
			$fila = $resultado->fetch_assoc();
			if ($fila['ID']!=""){
				echo"Se encontro";
				//REGRESAR A LA PAGINA DE RECUPERACION DE CONTRASEÑA CON EL EMAIL PRE-CARGADO
			}else{
				    mysqli_query($conex, "INSERT INTO usuarios(NOMBRES, APELLIDO_PATERNO, APELLIDO_MATERNO, EMAIL, PASSWORD, TITLE, STATUS) VALUES ('$name', '$apellido1', '$apellido2', '$email', '$pass1', 'CLIENTE', 'WAITING')");
				    exit;
				    email($email, $name);
			}
			mysqli_close($conex);
		}else{
			header('Location: ../HTML/accountcreation.html');
		}
	}
?>