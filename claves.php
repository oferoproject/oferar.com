<?

include_once 'Usuario.php';
session_start();

$usuario = $_SESSION['log'];

$fecha = date('Y-m-d');

if (empty($_SESSION['log'])) {
	$total_articculos = "0";
	$total_precio = "0.00";
}


include('conex.php');
$link=Conectarse();

 
$favicon = mysql_result(mysql_query("SELECT * FROM imagen WHERE id!=''", $link), 0, 'foto');



if ($usuario != ""){


	$rs = mysql_query("SELECT * FROM usuario WHERE correo='$usuario'", $link);  
	
	for($i=0;$i<mysql_num_rows($rs);$i++){
		$cod_usuario     = mysql_result($rs, $i, 'cod_usuario');
		$correo         = mysql_result($rs, $i, "correo");
		$nick           = explode("@",$correo)[0];
		$contrasena     = mysql_result($rs, $i, 'contrasena');
		$nombre     = mysql_result($rs, $i, 'nombre');
		$apellido     = mysql_result($rs, $i, 'apellido'); 
		$telefono     = mysql_result($rs, $i, 'telefono');
		$publicaciones     = mysql_result($rs, $i, 'publicaciones');
		$estado     = mysql_result($rs, $i, 'estado');
		$tipo     = mysql_result($rs, $i, 'tipo');
	}
}





?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">


<link rel="icon" type="image/png" href="<? echo mysql_result(mysql_query("SELECT * FROM imagen", $link), 0, 'foto'); ?>" />


<title>Ocasión Perú | Todo lo Bueno, Bonito y Barato, solo lo encuentras por Ocasión</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/blue.css">
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.transitions.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/rateit.css">
<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css"/>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>


<link rel="stylesheet" href="datatables/dataTables.bootstrap.css">

<script src="assets/js/jquery-1.11.1.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script> 
<script src="assets/js/echo.min.js"></script> 
<script src="assets/js/jquery.easing-1.3.min.js"></script> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<script src="assets/js/jquery.rateit.min.js"></script> 
<script type="text/javascript" src="assets/js/lightbox.min.js"></script> 
<script src="assets/js/bootstrap-select.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/scripts.js"></script>



<link rel="stylesheet" href="./minified/themes/default.min.css" id="theme-style" />

<script src="./minified/sceditor.min.js"></script>
<script src="./minified/icons/monocons.js"></script>
<script src="./minified/formats/bbcode.js"></script>

<style type="text/css">
.formulario{
	margin-left: 5%; 
	margin-right: 5%; 
	padding-bottom: 2%;
}
</style>

<style>
html {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
}
form div {
	padding: .5em;
}
code:before {
	position: absolute;
	content: 'Code:';
	top: -1.35em;
	left: 0;
}
code {
	margin-top: 1.5em;
	position: relative;
	background: #eee;
	border: 1px solid #aaa;
	white-space: pre;
	padding: .25em;
	min-height: 1.25em;
}
code:before, code {
	display: block;
	text-align: left;
}
</style>



