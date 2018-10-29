<?php
	require_once('conexion.php');
	$conexion=Conectar();

	$id=$_REQUEST['id'];
	$un=$_REQUEST['uni'];
	$consulta="delete from asistencia where ID_ASIS='$id'";
	$query=mysqli_query($conexion, $consulta);
	Desconectar($conexion);
	header("Location:participantes-asistentes.php?id=$un");

?>