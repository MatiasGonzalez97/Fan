<?php
// 1- Conexión
$mysqli = new mysqli("localhost", "root", "", "dc");

// 2- Verificar si se ha producido o no la conexión
if ($mysqli->connect_error)
{
    printf("<hr>Connect failed (Err. nº %d): %s<hr/>", $mysqli->connect_errno, $mysqli->connect_error);
    exit();
}

// 3- Establecimiento del formato de codificación de caracteres UTF-8
if(!$mysqli->set_charset("utf8"))
{
	printf("<hr>Error loading character set utf8 (Err. nº %d): %s\n<hr/>",	$mysqli->errno, $mysqli->error);
	exit();
}

// 4- Asignar a variables los nombres de las tablas de la base de datos (opcional)
$tbUsuarios    = "usuarios";

?>
