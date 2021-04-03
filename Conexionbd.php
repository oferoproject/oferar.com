<?php
class Conexionbd{	
	var $host =  "localhost"; 
	var $usuario = "ocasi8tz_ocasion"; 
	var $password = "clave.12345"; 
	var $name = "ocasi8tz_ocasion"; 
	function getConection(){
		$link = mysql_connect($this->host, $this->usuario, $this->password); 		
		mysql_select_db($this->name, $link);
		return $link;
	}
} 
?>

