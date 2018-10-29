<?php
	require_once('conexion.php');
	$conexion=Conectar();

	$id=$_REQUEST['id'];
	$consulta1="delete from telefono where CI_USER='$id'";
	$consulta2="delete from mail where CI_USER='$id'";
	$consulta3="delete from datos_profesionales where CI_USER='$id'";
	$consulta4="delete from usuario where CI_USER='$id' ";

	$query1=mysqli_query($conexion, $consulta1);
	$query2=mysqli_query($conexion, $consulta2);
	$query3=mysqli_query($conexion, $consulta3);
	$query4=mysqli_query($conexion, $consulta4);
	Desconectar($conexion);
	header("Location:participantes.php?m=1");

?>
