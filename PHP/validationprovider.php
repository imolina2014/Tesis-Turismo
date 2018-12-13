<?php
	require_once '../APP/init.php';
	$response = $recaptcha -> verify($_POST['g-recaptcha-response']); 	

	$name = $_POST["name"];
	$rutp = $_POST["rutpersonal"];
	$fecha = $_POST["fecha"];
	$email = $_POST["email"];
	$tel01 = $_POST["telefonopersonal01"];
	$tel02 = $_POST["telefonopersonal02"];
	$cel01 = $_POST["celularpersonal01"];
	$cel02 = $_POST["celularpersonal02"];
	$passw = $_POST["password"];

	$namec = $_POST["namecomercial"];
	$rutc = $_POST["rutcomercial"];
	// $rutp = $_POST["girocomercial"];
	// $rutp = $_POST["ubicacion"];

	echo"
		Proveedor:<br><br>
			Nombre: ".$name. "<br>
			Rut: ".$rutp. "<br>
			Fecha de Nacimiento: ".$fecha. "<br>
			Email: ".$email. "<br>
			Telefono: ".$tel01."-".$tel02. "<br>
			Celular: ".$cel01."-".$cel02. "<br>
			Password: ".$passw. "<br>
		<br><br>	<br><br>
		Local: <br><br>
			Nombre: ".$namec . "<br>
			Rut:	".$rutc. "<br>


	";
	if($response->isSuccess()){
		echo"OK";
	}else{
		echo"Failed";
	}



?>