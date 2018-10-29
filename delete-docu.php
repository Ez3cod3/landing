<?php
	require_once('conexion.php');
	$conexion=Conectar();

	$id=$_REQUEST['doc'];
	$pro=$_REQUEST['pro'];
	$consulta="delete from documentos where ID_DOCU ='$id'";
	$query=mysqli_query($conexion, $consulta);
	Desconectar($conexion);
	header("Location:documentacion.php?id=$pro");
?>