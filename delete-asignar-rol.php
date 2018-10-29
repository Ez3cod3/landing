<?php
	require_once('conexion.php');
	$conexion=Conectar();

	$id=$_REQUEST['id'];
	$consulta="delete from user_rol where ID_USER_ROL='$id'";
	$query=mysqli_query($conexion, $consulta);
	Desconectar($conexion);
	header("Location:asignar-rol.php?m=1");

?>
