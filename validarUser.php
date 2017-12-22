<?php
	
		session_start();
		include_once('conexion.php');
		
		$cod_sis_us=$_REQUEST['cod_reg'];
		$ci_us=$_REQUEST['ci_usuario'];
		
		$conexion=Conectar();
		$consulta="SELECT * FROM registro where COD_REG='$cod_sis_us' and CI_USER='$ci_us'";
		echo "$consulta";

		$query=mysql_query($consulta);
		$dato=mysql_fetch_array($query);
		$count = mysql_num_rows($query);
		echo "$count";
		if($count == 1)
		{ 
		
		$_SESSION['log'] = true; 
		$_SESSION['cod'] = $dato['COD_USER'];
		$_SESSION['usr'] = $dato['NOM_USER'];

		Desconectar($conexion);
		header ("Location: index.php");
		exit;
		}

		else {
			echo "Datos incorrectos";
		header ("Location : login.php");
		exit;
		}
 


		/*session_start();
		include_once('conexion.php');
		
		$cod_user=$_REQUEST['cod_user'];
		$nro_ci=$_REQUEST['ci_user'];
		
		$conexion=Conectar();
		$consulta="SELECT * FROM usuario where cod_user='$cod-matri' and ci_user='$nro-ci'";
		echo "$consulta";

		$query=mysql_query($consulta);
		$dato=mysql_fetch_array($query);
		$count = mysql_num_rows($query);
		echo "$count";
		if($count == 1)
		{ 
		
		$_SESSION['log'] = true; 
		$_SESSION['cod'] = $dato['ci_user'];
		$_SESSION['usr'] = $dato['nom_user'];

		Desconectar($conexion);
		header ("Location: index.php");
		exit;
		}

		else {
			echo "Datos incorrectos";
		header ("Location: error.php?m=2");
		exit;
		}/*
 
/*
$cod_sis_us = $_POST['cod_sis_us'];
$ci_us = $_POST['ci_us'];

require_once('conexion.php');
$conexion=Conectar();
$consulta1="SELECT * FROM usuario where COD_SIS_US = '$cod_sis_us' and CI_US = '$ci_us' ";
$query1=mysql_query($consulta1);
if (mysql_num_rows($query1)>0) {
	session_start();
	$_SESSION('usuario') = $_POST['cod_sis_us'];

?>

	<script type="text/javascript">
		window.location="home.php"
	</script>

	<?php 
}

else {
	echo "Datos incorrectos";
}*/
?>