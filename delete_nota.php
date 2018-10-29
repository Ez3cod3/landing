<?php
	require_once('conexion.php');
	$conexion=Conectar();

	$id=$_REQUEST['id'];
	$un=$_REQUEST['uni'];
	$consulta="delete from nota where ID_NOTA='$id'";
	$query=mysqli_query($conexion, $consulta);
	Desconectar($conexion);
	header("Location:participante-nota.php?id=$un");

?>