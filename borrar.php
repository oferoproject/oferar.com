<?php
$enlace = mysql_connect('credirutas.com', 'grcls', 'credi123.');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}

$sql = 'DROP DATABASE grcls';
if (mysql_query($sql, $enlace)) {
    echo "La base de datos grcls fue eliminada con éxito\n";
} else {
    echo 'Error al eliminar la base de datos: ' . mysql_error() . "\n";
}
?>