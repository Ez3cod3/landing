<?php 
require_once('conexion.php');
$conexion=Conectar();

	
	$monto_rin_mun = $_POST['monto_num'];
	$monto_rin_le = $_POST['monto_esc'];
	$nom_caj = $_POST['cajero_rec_in'];
	$tipo = $_POST['tipo_in'];
	$matri = $_POST['matricula']; 
	
	$des_rin = $_POST['desc_re_in'];
	
	$fec_rin = $_POST['fec_rec_in'];
	$lugar_rin = $_POST['lugar_re_in'];
	$programa_in = $_POST['pro_in'];
	
	session_start(); 
	$yes = $_SESSION['log'];
	$cod = $_SESSION['cod'];
	$ids = $_SESSION['usr'];


	$insertarDato = "INSERT INTO recibo_ingreso VALUES (null, '$tipo', '$monto_rin_mun', '$monto_rin_le', '$des_rin', '$lugar_rin', '$fec_rin', '$cod', '$matri', '$programa_in')";
	echo "$insertarDato";
	mysqli_query($conexion, $insertarDato);

	$consulta = "select * from deuda where deuda.MATRICULA = $matri AND deuda.COD_PROGRA = $programa_in AND deuda.DEBE = 1";
		$query = mysqli_query($conexion, $consulta);

		if ($dato=mysqli_fetch_array($query)) 
		{
			# code...
			$aux = $dato['DEUDA'];
			$aux = $aux - $monto_rin_mun;
			$consulta1 = "UPDATE deuda SET DEUDA = '".$aux."' where deuda.MATRICULA = $matri AND deuda.COD_PROGRA = $programa_in AND deuda.DEBE = 1 ";
		}

	$consulta = "select * from recibo_ingreso order by ID_RE_IN desc limit 1 ";
		$query = mysqli_query($conexion, $consulta);

		$dato = mysqli_fetch_array($query);
		$a = $dato["ID_RE_IN"];

	echo "SE INSERTO LOS DATOS";
	header("Location:imprimir-recibo-ingreso.php?m=$a");

?>