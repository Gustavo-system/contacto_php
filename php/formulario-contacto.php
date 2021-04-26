<?php

if(isset($_POST['submit'])){
	require_once 'conexion.php';

   $user_name = isset($_POST['nm_username']) ? mysqli_real_escape_string($conexion, $_POST['nm_username']) : false;
   $empresa = isset($_POST['nm_empresa']) ? mysqli_real_escape_string($conexion, $_POST['nm_empresa']) : false;
   $numero = isset($_POST['nm_phone']) ? mysqli_real_escape_string($conexion, $_POST['nm_phone']) : false;
   $email = isset($_POST['nm_email']) ? mysqli_real_escape_string($conexion, $_POST['nm_email']) : false;
   $asunto = isset($_POST['nm_asunto']) ? mysqli_real_escape_string($conexion, $_POST['nm_asunto']) : false; 
   
   $errores = array();

	if(!empty($user_name) && !is_numeric($user_name) && !preg_match("/[0-9]/", $user_name)){
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['username'] = "El nombre es un campo obligatorio y no puede estar vacio";
	}

	if(!empty($empresa)){
		if(strlen($empresa > 10)){
			$empresa_valida = true;
		}else{
			$empresa_valida = false;
			$errores['empresa'] = "Las empresa no son válido";
		}
	}

   if(!empty($numero) && is_numeric($numero) && preg_match("/[0-9]/", $numero) && strlen($numero) == 10){
      $numero_valido = true;
   }else{
      $numero_valido = false;
      $errores['numero'] = "El numero telefonico es incorrecto";
   }

	if(!empty($email)){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$email_validado = true;
		}else{
			$email_validado = false;
			$errores['email'] = "El email no es válido";
		}
	}

   if(!empty($asunto) && strlen($asunto) > 10){
      $asunto_valido = true;
   }else{
      $asunto_valido = false;
      $errores['asunto'] = "El asunto es incorrecto";
   }

   $guardar_usuario = false;

	if(count($errores) == 0){
		$guardar_usuario = true;
      $sql = "INSERT INTO contacto VALUES(null, '$user_name', '$empresa', '$numero', '$email', '$asunto')";

		$guardar = mysqli_query($conexion, $sql);

		if ($guardar) {
			// aqui va lo del email que se que esta en el otro archivo pero no se si funciona
			require_once 'envioEmail.php';
		}
		else{
			echo "<script>alert('UPS!!!... Lo lamento, problemas internos, Intentalo más tarde');</script>";
			header('Location:../index.php');
		}

	}else{
		echo "<script>alert('UPS!!!... Lo lamento, problemas en el servidor');</script>";
		header('Location:../index.php');
	}

}

header('Location:../index.php');