<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

include('conex.php');




if ($_REQUEST["Arbitro"] == "nuevo_usuario") {
	
	echo $sql = "INSERT INTO usuario (nombre,apellido,telefono,correo,clave) VALUE ('".$_REQUEST["nombre"]."','".$_REQUEST["apellido"]."','".$_REQUEST["telefono"]."','".$_REQUEST["correo"]."','".$_REQUEST["clave"]."')";
	
	$carga = mysql_query($sql) or die("La consulta fallo;: ".mysql_error());
	
	header("location: login.php");
}   
?>

