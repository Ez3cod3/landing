<?php
session_start();
require_once('conexion.php');
$conexion = Conectar();
$fecha_entrega = date("Y-m-d");

if (isset($_REQUEST["new_docu"])) {
	$codpro = $_POST['cod_programa'];
	$ciuser = $_POST['nom_par'];
	$cantidad_cn = $_POST['cant_nac'];
	$folio_cn = $_POST['folio_nac'];
	$num_ci = $_POST['num_ci'];
	$expedido_ci = $_POST['exp_ci'];
	$caducidad_ci = $_POST['caduca_ci'];
	$cantidad_ci = $_POST['cant_ci'];
	$emision_tpn = $_POST['emision_titu'];
	$resolucion_tpn = $_POST['num_titu'];
	$inst_tpn = $_POST['int_titu'];
	$tipo_doc_tpn = $_POST['tipo_titu'];
	$entrega_tpn = $_POST['entrega_titu'];
	$emision_da = $_POST['emision_diplo'];
	$resolucion_da = $_POST['num_diplo'];
	$inst_da = $_POST['int_diplo'];
	$tipo_doc_da = $_POST['tipo_diplo'];
	$entrega_da = $_POST['entrega_diplo'];
	$cantidad_foto = $_POST['cant_foto'];
	$detalle_foto = $_POST['detalle_foto'];
	$entrega_carta = $_POST['entrega_carta'];
	$cantidad_carta = $_POST['cant_carta'];
	$cantidad_tpn = $_POST['cant_titu'];
	$cantidad_da = $_POST['cant_diplo'];
	

	$insertarDato = "INSERT INTO documentos VALUES (null, '$codpro', '$ciuser', '$cantidad_cn', '$folio_cn', '$num_ci', '$expedido_ci', '$caducidad_ci', '$cantidad_ci', '$emision_tpn', '$resolucion_tpn', '$inst_tpn', '$tipo_doc_tpn', '$entrega_tpn', '$emision_da', '$resolucion_da', '$inst_da', '$tipo_doc_da', '$entrega_da', '$cantidad_foto', '$detalle_foto', '$entrega_carta', '$cantidad_carta', '$fecha_entrega', '$cantidad_tpn', '$cantidad_da' )";
	
	
		mysqli_query($conexion, $insertarDato);
		
		header("Location:lista-documentacion.php?m=5");
		exit;
}else{
	echo "Datos incorrectos";
	exit;
}	
?>