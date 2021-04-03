<?php

class Usuario{
	var $login;
	var $clave;
	var $ci;
	var $estado;
	var $nombre;
	var $apellido;
	
	 function Usuario($login){
	 $link=null;
	 $conex = $_SESSION['conex'];	
	 $link = $conex->getConection();

	 	$query = "Select * from usuario where correo='$login'";
		$resultado=mysql_query($query) or die("La consulta b&uacute;squeda del Usuario fall&oacute;: " . mysql_error());
		$numeroDeResultados=mysql_num_rows($resultado);
		if($numeroDeResultados==0) { 
			unset($this);
			return;
		}
		else{
		$arrayResultado=mysql_fetch_array($resultado);
	 	$this->login = $login;
 	 	$this->estado = $arrayResultado['status'];
		}
		
		mysql_free_result($resultado);
		mysql_close($link);
 	 }

	function autentica($pass){		
 	 	$link=null;
 	 	$conex = $_SESSION['conex'];
	 	$link = $conex->getConection();
		$login = $this->login;
		
		$query = "SELECT * FROM usuario WHERE correo='$login' AND contrasena='$pass'  and estado='Activo'  ";		
		$result = mysql_query($query)or die("El autenticado fall&oacute;: " . mysql_error());
		
		$rows = mysql_num_rows($result);
			if($rows == 0){
			return false;
			}
			else{
				return true;
			}

		mysql_close($link);		
	}
	
	function verificaClave($clave_a_verificar){
		
 	 	$link=null;
 	 	$conex = $_SESSION['conex'];
	 	$link = $conex->getConection();
		$login = $this->login;
		
		$query = "SELECT * FROM usuario WHERE correo=$login AND contrasena=$pass  and estado='Activo'  ";		
		$result = mysql_query($query)or die("La verificacion de Clave de Usuario fall&oacute;: " . mysql_error());
		
		$rows = mysql_num_rows($result);
			if($rows == 0){
			return false;
			}
			else{
				return true;
			}

		mysql_close($link);		
	}
 	 
 	 function cambiaClave($clave_nueva){
 	 	$link=null;
 	 	$conex = $_SESSION['conex'];
	 	$link = $conex->getConection();
		
		$login = $this->login;
		$query="update usuario WHERE correo=$login AND contrasena=$pass";
		mysql_query($query)or die("El cambio de clave de Usuario fall&oacute;: " . mysql_error());
		mysql_close($link);	 	
 	 }

}
ini_set("session.gc_maxlifetime", 60*5);
?>
