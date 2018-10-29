<?php 
require_once('conexion.php');
$conexion=Conectar();

//insertar program

	$cod_re = $_POST['cod_re_e'];
	
	$monto_re = $_POST['monto_re_e'];
	$monto_re_le = $_POST['monto_es_e'];
	$nom_caj = $_POST['cajero_rec_in'];	
	$recibidor = $_POST['cancelo_re_e'];
	$fec_eg = $_POST['fecha_re_e'];
	$item_eg = $_POST['item'];
	$subitem_eg = $_POST['subitem'];
	$caja = $_POST['caja'];
	$lugar = $_POST['lugar_re_e'];
	$desc = $_POST['des_egre'];
	
	

	$insertarDato = "INSERT INTO recibo_egreso VALUES (null, '$caja', '$recibidor', '$monto_re', '$monto_re_le', '$item_eg', '$subitem_eg', '$lugar', '$fec_eg', '$nom_caj', '$desc')";
	echo "$insertarDato";
	mysqli_query($conexion, $insertarDato);

	$consulta = "select * from recibo_egreso order by ID_RE_EG desc limit 1  ";
		$query = mysqli_query($conexion, $consulta);

		$dato = mysqli_fetch_array($query);
		$a = $dato["ID_RE_EG"];

	echo "SE INSERTO LOS DATOS";
	header("Location:imprimir-recibo-egreso.php?m=$a");

?>