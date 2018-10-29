<?php
	require_once('conexion.php');
	$conexion=Conectar();

	$id=$_REQUEST['id'];
	$consulta="delete from formulario where ID_FORM='$id'";
	$query=mysqli_query($conexion, $consulta);
	Desconectar($conexion);
	header("Location:listado-formularios.php?m=3");
?>