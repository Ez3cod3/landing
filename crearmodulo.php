<?php 
require_once('conexion.php');
$conexion=Conectar();

//insertar modulo

	$cod_m = $_POST['cod_mod'];
	$cod_p = $_POST['cod_programa'];
	$nom_m = $_POST['nom_mod'];
	
	$fecha_m = $_POST['fecha_mod'];
	
	

	$insertarDato = "INSERT INTO modulo VALUES (NULL, '$cod_p', '$nom_m', '$fecha_m', null)";
	echo "$insertarDato";
	mysqli_query($conexion, $insertarDato);

	echo "SE INSERTO LOS DATOS";
	header("Location:lista-modulo.php?=3");

?>