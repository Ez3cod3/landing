<?php
	require_once('conexion.php');
	$conexion=Conectar();

	$id=$_REQUEST['id'];
	$consulta="delete from modulo where COD_MOD='$id'";
	$query=mysqli_query($conexion, $consulta);
	Desconectar($conexion);
	header("Location:lista-modulo.php?m=8");
?>