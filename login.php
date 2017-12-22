<?php
session_start();
	include_once('conexion.php');
		
		$user=$_REQUEST['cod_reg'];
		$pwd=$_REQUEST['ci_user'];
		$conexion=Conectar();

		$consulta="SELECT * FROM registro where COD_REG='".$user."' and CI_USER='".$pwd."'";
		
		$query=mysql_query($consulta);
		$dato=mysql_fetch_array($query);
		$count = mysql_num_rows($query);
		
		if($count == 1)
		{ 

		$_SESSION['log'] = true; 
		$_SESSION['usr'] = $dato['NOM_USER'];
		$_SESSION['hab'] = $dato['HABILITADO'];
		
		Desconectar($conexion);
		header ("Location: home.php");
		exit;
		}

		else {
			echo "Datos incorrectos";
		
		exit;
		}
	
?>