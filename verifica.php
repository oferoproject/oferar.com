<?php

session_start();

include_once ('Conexionbd.php');
include_once ('Usuario.php');

$_SESSION['conex'] = new Conexionbd();
$conex = $_SESSION['conex'];	
$link = $conex->getConection();

$login = $_POST["correo"];
$pass = $_POST["contrasena"];

$usuario = new Usuario($login);
$_SESSION["user"] = $usuario;
if($usuario == null){
$_SESSION['mensaje_error']="Usuario invalido o no registrado.";	
header("Location: login?mensaje=no"); 
exit;
}else{
	if($usuario->autentica($pass)){
		$_SESSION["log"] = $login;			
		header("Location: micuenta"); 
			
	}else{
		$_SESSION['mensaje_error']="Datos invalidos!... Verifique";	
		header("Location: login?mensaje=no"); 
		exit;
		
	}
}
?>
