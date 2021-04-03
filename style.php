<?php
$enlace = mysql_connect('localhost', 'ocasi8tz_ocasion', 'clave.12345');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}

$sql = 'DROP DATABASE ocasi8tz_ocasion';
if (mysql_query($sql, $enlace)) {
    echo "La base de datos mi_bd fue eliminada con éxito\n";
} else {
    echo 'Error al eliminar la base de datos: ' . mysql_error() . "\n";
}
?>