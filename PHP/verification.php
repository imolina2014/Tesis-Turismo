<?php
	$mail = $_POST["email"];
	$pass = $_POST["password"];
	include "database.php";	
 function query($conex,$mail,$pass,$tabla){
		$sql = "SELECT ID, APELLIDO_PATERNO, APELLIDO_MATERNO, EMAIL, PASSWORD, TITLE FROM $tabla WHERE EMAIL = '$mail'";
		$resultado = $conex->query($sql);
		if($sql->errno) die($sql->error);
		$fila = $resultado->fetch_assoc();
		$conex->close();
		return($fila);
	}
	function redirect($pass,$passBD,$mail,$mailBD,$title,$apellido1,$apellido2,$id){
		if ((password_verify($pass, $passBD)) && ((strtoupper($mail)) == $mailBD )) {	
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
	} 
	$result = query($conex,$mail,$pass,"usuarios");
	if ($result['ID']!=""){
		redirect($pass,$result['PASSWORD'],$mail,$result['EMAIL'],$result['TITLE'],$result['APELLIDO_PATERNO'],$result['APELLIDO_MATERNO'],$result['ID']);
	}else{			
		$result->free();	
		$result = query($conex,$mail,$pass,"proveedores");
		if ($result['ID']!=""){
			redirect($pass,$result['PASSWORD'],$mail,$result['EMAIL'],$result['TITLE'],$result['APELLIDO_PATERNO'],$result['APELLIDO_MATERNO'],$result['ID']);
		}else{	
			mysqli_close($conex);
			$result->free();
			header('Location: ../apologies.php');
		}				
	}
	








	

?>