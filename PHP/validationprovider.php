<?php
	require_once '../APP/init.php';
	$response = $recaptcha -> verify($_POST['g-recaptcha-response']); 	

	$name = $_POST["names"];
	$apellido1 = $_POST["apellido1"];
	$apellido2 = $_POST["apellido2"];
	$rutp = $_POST["rutpersonal"];
	$fecha = $_POST["fecha"];
	$email = $_POST["email"];
	$telper = $_POST["telefonopersonal"];
	$celper = $_POST["celularpersonal"];
	$passw = $_POST["password"];

	$namec = $_POST["namecomercial"];
	$rutc = $_POST["rutcomercial"];
	$telcom = $_POST["telefonocomercial"];
	$celcom = $_POST["celularcomercial"];
	$giro = $_POST["girocomercial"];
	// $rutp = $_POST["ubicacion"];

	echo"
		Proveedor:<br><br>
			Nombre: ".$name." ".$apellido1." ".$apellido2. "<br>
			Rut: ".$rutp. "<br>
			Fecha de Nacimiento: ".$fecha. "<br>
			Email: ".$email. "<br>
			Telefono: ".$telper. "<br>
			Celular: ".$celper. "<br>
			Password: ".$passw. "<br>
		<br><br>	<br><br>
		Local: <br><br>
			Nombre: ".$namec . "<br>
			Rut:	".$rutc. "<br>
			Telefono:	".$telcom. "<br>
			Celular:	".$celcom. "<br>
			Giro:	".$giro. "<br>



	";
	// if($response->isSuccess()){
	// 	echo"OK";
	// }else{
	// 	echo"Failed";
	// }
	////VALIDACION DE CAPTCHA...IMPLEMENTAR LUEGO DE QUE ESTE TODO OK



?>