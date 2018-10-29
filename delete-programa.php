<?php
	require_once('conexion.php');
	$conexion=Conectar();

	$id=$_REQUEST['id'];

	$consulta="select * from programa, modulo, unidad where programa.COD_PROGRA = '$id' and modulo.COD_PROGRA = '$id' and modulo.COD_MOD = unidad.COD_MOD"  ;

	$query=mysqli_query($conexion, $consulta);
	$dato=mysqli_fetch_array($query);
	$a = $dato ['COD_MOD'];

	$consulta1="delete from unidad where COD_MOD = '$a' ";

	$consulta2="delete from modulo where COD_PROGRA='$id'";
	$consulta3="delete from programa where COD_PROGRA='$id'";
	$query1=mysqli_query($conexion, $consulta1);
	$query2=mysqli_query($conexion, $consulta2);
	$query3=mysqli_query($conexion, $consulta3);

	
	Desconectar($conexion);
	header("Location:lista-programas.php?m=3");
?>