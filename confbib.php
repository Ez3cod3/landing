<?php
require_once('conexion.php');
$conexion = Conectar();
session_start();
$cod = $_SESSION['codmat'];


if(isset($_REQUEST['agrega_lib']))
	{
		// Recuperando variables de new_lib -----------------
		$cod_bib = $_POST['cod_lib'];
		$nom_lib = $_POST['nom_lib'];
		$aut_lib = $_POST['aut_lib'];
		$hab = 0;
		
			$insertarDato = "INSERT INTO biblioteca(`COD_BIB`, `NOM_LIB`, `AUTOR`,`SEL_BIB`) 
									VALUES('$cod_bib', '$nom_lib', '$aut_lib', '$hab')";
		echo $insertarDato;
		mysqli_query($conexion, $insertarDato);
		header("Location:biblio.php?m=15"); 
	}

if(isset($_REQUEST['agrega'])){			    
		$num= $_POST["count"];// $res['numer'];
        $counta=0;
        while($counta < $num){
            $a =  $_POST["a".$counta]; //ide codigo planglobal
           	$nom = $_POST["nomlib".$counta];
			$aut = $_POST["autor".$counta];
			$iden = 0; //habilitado ?
            if($_POST['iden'.$counta]){
              $iden=1;
              $consulta = "INSERT INTO biblio('COD','COD_MAT', 'COD_BIB', 'NOM_LIB', 'AUTOR')
							VALUES (NULL,'$cod','$a','$nom','$aut')";
			echo $consulta;
			$query = mysqli_query($conexion, $consulta);
             /*  */
            } 
            $consulta1 = "UPDATE biblioteca SET SEL_BIB='$iden' WHERE COD_BIB = '$a'";
            $quer1y = mysqli_query($conexion, $consulta1);
            echo $consulta1;
            
            //header('Location:biblio.php');
            $counta++;
        }
            
            
        }

	

?>