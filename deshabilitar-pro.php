<?php
	require_once('conexion.php');
	$conexion=Conectar();

	$id=$_REQUEST['id'];
	$consulta1="UPDATE `programa` SET `HABILITADO` = '0' WHERE `programa`.`COD_PROGRA` = '$id'";
	

	$query1=mysqli_query($conexion, $consulta1);
	
	
	Desconectar($conexion);
	header("Location:programa.php?m=1");

?>
