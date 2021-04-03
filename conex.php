<?php 
function Conectarse() 
{ 
   if (!($link=mysql_connect("localhost","ocasi8tz_ocasion","clave.12345"))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db("ocasi8tz_ocasion",$link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
}
?>