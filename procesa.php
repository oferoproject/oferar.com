 <?php 

 include('claves.php');
 if ($usuario == "") {
 	header("location: ./");
 }







 if ($_REQUEST['Arbitro'] == 'pagook'){

 	$compra = $publicaciones + $_REQUEST['publicaciones'];

 	mysql_query("UPDATE usuario SET publicaciones= ".$compra." where cod_usuario=".$cod_usuario." ", $link) or die("La consulta fallo;: ".mysql_error());
 	$redireccion = "micuenta?mensaje=carga_efectiva";
 }


 if ($_REQUEST["Arbitro"] == "nuevo_producto") {

 	ini_set("memory_limit", "1024M");
 	function redimencionar($file){

 		$imagen = ImageCreateFromJPEG($file);
 		unlink($file); 
 		$width  = imagesx($imagen);
 		$height = imagesy($imagen);

 		$nueva_anchura = 800; 
 		$nueva_altura  = ($nueva_anchura * $height) / $width; 

 		if (function_exists("imagecreatetruecolor")) {
 			$calidad = ImageCreateTrueColor($nueva_anchura, $nueva_altura);
 		} else {
 			$calidad = ImageCreate($nueva_anchura, $nueva_altura);
 		}
 		ImageCopyResized($calidad, $imagen, 0, 0, 0, 0, $nueva_anchura, $nueva_altura, $width, $height);
 		ImageJPEG($calidad, $file, 100);
 		imagedestroy($imagen);
 		return true;
 	}


 	if ($_FILES['foto1']['name'] != "") {
 		if (is_uploaded_file($_FILES['foto1']['tmp_name'])) {
 			if ($_FILES['foto1']['type'] == "image/jpg" || $_FILES['foto1']['type'] == "image/jpeg") {
 				$foto1 = "foto/articulo1" . date('YmdHis') . ".jpg";
 				if (move_uploaded_file($_FILES['foto1']['tmp_name'], $foto1)) {
 					if (redimencionar($foto1)) {
 					}
 				}
 			}
 		}
 	}
 	if($foto1<>''){
 		$carga_foto1 = $foto1;
 	}




 	if ($_FILES['foto2']['name'] != "") {
 		if (is_uploaded_file($_FILES['foto2']['tmp_name'])) {
 			if ($_FILES['foto2']['type'] == "image/jpg" || $_FILES['foto2']['type'] == "image/jpeg") {
 				$foto2 = "foto/articulo2" . date('YmdHis') . ".jpg";
 				if (move_uploaded_file($_FILES['foto2']['tmp_name'], $foto2)) {
 					if (redimencionar($foto2)) {
 					}
 				}
 			}
 		}
 	}
 	if($foto2<>''){
 		$carga_foto2 = $foto2;
 	}



 	if ($_FILES['foto3']['name'] != "") {
 		if (is_uploaded_file($_FILES['foto3']['tmp_name'])) {
 			if ($_FILES['foto3']['type'] == "image/jpg" || $_FILES['foto3']['type'] == "image/jpeg") {
 				$foto3 = "foto/articulo3" . date('YmdHis') . ".jpg";
 				if (move_uploaded_file($_FILES['foto3']['tmp_name'], $foto3)) {
 					if (redimencionar($foto3)) {
 					}
 				}
 			}
 		}
 	}
 	if($foto3<>''){
 		$carga_foto3 = $foto3;
 	}



 	if ($_FILES['foto4']['name'] != "") {
 		if (is_uploaded_file($_FILES['foto4']['tmp_name'])) {
 			if ($_FILES['foto4']['type'] == "image/jpg" || $_FILES['foto4']['type'] == "image/jpeg") {
 				$foto4 = "foto/articulo4" . date('YmdHis') . ".jpg";
 				if (move_uploaded_file($_FILES['foto4']['tmp_name'], $foto4)) {
 					if (redimencionar($foto4)) {
 					}
 				}
 			}
 		}
 	}
 	if($foto4<>''){
 		$carga_foto4 = $foto4;
 	}

 	if ($foto1 == "" and $foto2 == "" and $foto3 == "" and $foto4 == ""){
 		$carga_foto1 = "foto/sinfoto.png";
 	}



 	mysql_query("UPDATE usuario SET publicaciones=publicaciones-1 where cod_usuario=".$_REQUEST["cod_usuario"]." ", $link) or die("La consulta fallo;: ".mysql_error());



 	mysql_query("INSERT INTO publicacion (sub_categoria, cod_usuario,nombre, descripcion, disponibilidad, preciov, foto1, foto2, foto3, foto4, status, fecha_p, fecha_v, categoria, moneda, calidad, region, provincia, distrito) VALUE ('".$_REQUEST["subcategoria"]."', '".$_REQUEST["cod_usuario"]."', '".$_REQUEST["nombre"]."', '".$_REQUEST["descripcion"]."', '".$_REQUEST["disponibilidad"]."', '".$_REQUEST["preciov"]."', '".$carga_foto1."', '".$carga_foto2."', '".$carga_foto3."', '".$carga_foto4."','Activo','".date("d-m-Y")."','','".$_REQUEST["categoria"]."', '".$_REQUEST["moneda"]."', '".$_REQUEST["calidad"]."', '".$_REQUEST["region"]."', '".$_REQUEST["provincia"]."', '".$_REQUEST["distrito"]."')", $link) or die("La consulta fallo;: ".mysql_error());

 	$redireccion = "micuenta?mensaje=carga_efectiva";
 } 

 //------------------------------- ELIMINAR PUBLICACIONES  -----------------------------
if ($_REQUEST['Arbitro'] == "eliminar_publicacion") {

	mysql_query("DELETE FROM publicacion WHERE cod_publicacion  = '".$_REQUEST['cod_publicacion']."'", $link) or die("La consulta fallo;: " . mysql_error()); 
	
	$redireccion = "micuenta";
}


 header("location: ".$redireccion." "); 

 ?>





 

