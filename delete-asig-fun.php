<?php
	require_once('conexion.php');
	$conexion=Conectar();

	$id=$_REQUEST['id'];
	$consulta="delete from rol_funcion where ID_ROL_FUN='$id'";
	$query=mysqli_query($conexion, $consulta);
	Desconectar($conexion);
	header("Location:asignar-fun.php?m=1");

?>
