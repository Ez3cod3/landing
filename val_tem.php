<?php
		session_start();
		include_once('conexion.php');
		
		$cod_sis_us=$_REQUEST['cod_sis_us'];
		$ci_us=$_REQUEST['ci_us'];

		
		$conexion=Conectar();
		$consulta="SELECT * FROM planglobal as p WHERE EXISTS (SELECT * FROM planglobal as pg WHERE  )";
		echo "$consulta";

		$query=mysql_query($consulta);
		$dato=mysql_fetch_array($query);
		$count = mysql_num_rows($query);
		echo "$count";
		if($count == 1)
		{ 
		
		$_SESSION['log'] = true; 
		$_SESSION['cod'] = $dato['COD_SIS_US'];
		$_SESSION['usr'] = $dato['NOMBRE_US'];

		Desconectar($conexion);
		header ("Location: home.php");
		exit;
		}

		else {
			echo "Datos incorrectos";
		header ("Location: error.php?m=2");
		exit;
		}
 ?>