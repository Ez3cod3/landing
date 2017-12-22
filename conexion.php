<?php

	
function Conectar()
{
	$conn = mysql_connect("localhost","root","") or die("Error en conexion");
	mysql_select_db("funde", $conn) or die("Error en base de datos");
	//mysql_query("SET NAMES 'utf8'");
	return $conn;
}
function Desconectar($conn)
{
	mysql_close($conn);
}

?>


