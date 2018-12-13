<?php 
	


	$ingresa = 'NaasHoo7796';
	$hash_BD = '$2y$12$2mleoKUe8Pj5CSo/FFir6ukQXLTPsssfpzBfN7zwdDLoziBabzqVi';

	//$encripta = password_hash($ingresa, PASSWORD_BCRYPT, $opciones);

	$options = [
  'cost' => 11
];
$encripta =  password_hash($ingresa, PASSWORD_BCRYPT, $options);


	if(password_verify($ingresa, $encripta)){
		echo "Correcto";
	}

 ?>


