<?php
	require_once('conexion.php');
	$conexion=Conectar();

	$id=$_REQUEST['id'];
	$consulta1="delete from telefono where CI_USER='$id'";
	$consulta2="delete from mail where CI_USER='$id'";
	$consulta3="delete from usuario where CI_USER='$id' ";

	$query1=mysqli_query($conexion, $consulta1);
	$query1=mysqli_query($conexion, $consulta2);
	$query1=mysqli_query($conexion, $consulta3);
	Desconectar($conexion);
	header("Location:plantel-admin.php?m=1");

?>
