<?php 
require_once('conexion.php');
$conexion=Conectar();

//insertar unidad

	$cod_m = $_POST['cod_mod'];
	$cod_u = $_POST['cod_uni'];
	$nom_u = $_POST['nom_uni'];
	$des_u = $_POST[''];
	$fec_u = $_POST['fec_uni'];
	$doc_u = $_POST['doc_uni'];
	
	
	
	

	$insertarDato = "INSERT INTO unidad VALUES (NULL, '$cod_m', '$nom_u', '$fec_u', '$doc_u')";
	echo "$insertarDato";
	mysqli_query($conexion, $insertarDato);

	echo "SE INSERTO LOS DATOS";
	header("Location:lista-unidades.php?=3");

?>