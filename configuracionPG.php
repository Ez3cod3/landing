<?php
session_start();
require_once('conexion.php');
$conexion=Conectar();


//Variable de Sesion---------------------
//$id	= $_SESSION['cod'];


// Abre Plan Global
if(isset($_REQUEST['abrir_plan']))
	{
		header("Location:planglobal.php?m=19");
	}
// Registrar  Datos de plan global
if(isset($_REQUEST['new_plan']))
	{
		// Recuperando variables de plan global -----------------
		$cod_mat = $_POST['cod_mat'];
		$razon_asig = $_POST['razon_asig'];
		$porq_asig = $_POST['porq_asig'];
		$contr_prof = $_POST['contr_prof'];
		$prop_gral = $_POST['prop_gral'];
		$obj_gral = $_POST['obj_gral'];
		$bib_gral = $_POST['bib_gral'];	
		$fec_crea = $_POST['fec_crea'];			
		$hab_pg = 0;
		$vers_pg = 0;
		
			$insertarDato = "INSERT INTO planglobal(`COD_PG`, `VERS_PG`, `COD_MAT`, `RAZON_ASIG`, `PORQ_ASIG`, `CONTR_PROF`, `PROP_GRAL`, `OBJ_GRAL`, `BIB_GRAL`, `HAB_PG`, `FEC_CREA`) 
												VALUES(NULL,'$vers_pg','$cod_mat', '$razon_asig', '$porq_asig', '$contr_prof', '$prop_gral', '$obj_gral ', '$bib_gral', '$hab_pg', '$fec_crea')";
		echo $insertarDato;
		mysqli_query($conexion,  , $conxecion, $insertarDato);
		header("Location:tema.php?codmat=".$cod_mat."");
	}
//nueva unidad
	if(isset($_REQUEST['new_uni'])){
		// Recuperando variables de tema
		session_start();
		$cod_pg = $_SESSION['codpg'];
		$vers_pg = $_SESSION['verspg'];
		$cod_mat = $_POST['codmat'];
		$nom_uni = $_POST['nom_uni'];
		$dura_uni = $_POST['dura_uni'];
		$obj_uni = $_POST['obj_uni'];
		$cont_uni = $_POST['cont_uni'];
		$tec_predo = $_POST['tec_predo'];
		$eva_uni = $_POST['eva_uni'];
		$cod_bib = $_POST['codbib'];
		$nom_lib = $_POST['nomlib'];
		$aut_lib = $_POST['autlib'];
		$bib_uni = $_POST['bib_uni'];

		$insertarUni = "INSERT INTO tema(`COD_TEM`, `COD_PG`, `VERS_PG`, `NOM_UNI`, `DURA_UNI`, `OBJ_UNI`, `CONT_UNI`, `TEC_PREDO`, `EVA_UNI`, `BIB_UNI`) 
						VALUES(NULL,'$cod_pg','$vers_pg', '$nom_uni', '$dura_uni', '$obj_uni','$cont_uni', '$tec_predo','$eva_uni', '$bib_uni')";
		
		mysqli_query($conexion,  , $conxecion, $insertarUni);
		echo "Se inserto correctamente los datos";
		header("Location:tema.php?codmat=".$cod_mat."&codpg=".$cod_pg."&verspg=".$vers_pg."");
	}



	if (isset($_REQUEST['end_uni'])) {
		
		$cod_pg = $_POST['cod_pg'];
		$nom_uni = $_POST['nom_uni'];
		$dura_uni = $_POST['dura_uni'];
		$obj_uni = $_POST['obj_uni'];
		$cont_uni = $_POST['cont_uni'];
		$tec_predo = $_POST['tec_predo'];
		$eva_uni = $_POST['eva_uni'];
		$bib_uni = $_POST['bib_uni'];
		
		$insertarUni = "INSERT INTO tema(`COD_TEM`, `COD_PG`, `NOM_UNI`, `DURA_UNI`, `OBJ_UNI`, `CONT_UNI`, `TEC_PREDO`, `EVA_UNI`, `BIB_UNI`) 
						VALUES(NULL,'$cod_pg', '$nom_uni', '$dura_uni', '$obj_uni','$cont_uni', '$tec_predo','$eva_uni', '$bib_uni')";
		
		mysqli_query($conexion,  , $conxecion, $insertarUni);
		echo "Se inserto correctamente los datos";
		header("Location:listaPlanGlobal2.php");
	}


//actualiza plan global y tema	 
if(isset($_REQUEST['cambiar_plan'])){
        $num= $_POST["count"];// $res['numer'];
        $counta=0;
        while($counta < $num){
            $a =  $_POST["a".$counta]; //ide codigo planglobal
            $b= $_POST["b".$counta];
            $c = 0; //habilitado ?
            if($_POST["c".$counta]){
                $c=1;
            }
            $consulta = "UPDATE plan_global SET HAB_PG='$c' WHERE COD_PG = '$a' AND VERS_PG ='$b' ";
            $query = mysqli_query($conexion,  , $conxecion, $consulta);
            $counta++;
        }
        header("Location:listaPlanGlobal2.php?m=5");    
    }

if(isset($_REQUEST['cambiarNoHab']))
    {
        $num= $_POST["count"];// $res['numer'];
        
        $counta=0;
        while($counta < $num){
            $a=  $_POST["a".$counta]; //ide usus
            $b= $_POST["b".$counta];
            $c=0; //habilitado ?
            if($_POST["c".$counta]){
                $c=1;
            }
            $consulta = "UPDATE plan_global SET HAB_PG ='$c' WHERE COD_PG = '$a' AND VERS_PG = '$b'";
            $query=mysqli_query($conexion,  , $conxecion, $consulta);
            $counta++;
        }
        header("Location:listaPlanGlobal2.php?m=5");   
    }

    

	if (isset($_REQUEST['upd_uni'])) {

			$idt = $_POST['upd_uni'];

			$nom_uni = $_POST['nom_uni'];
			$dura_uni = $_POST['dura_uni'];
			$obj_uni = $_POST['obj_uni'];
			$cont_uni = $_POST['cont_uni'];
			$tec_predo = $_POST['tec_predo'];
			$eva_uni = $_POST['eva_uni'];

			echo $nom_uni;
			echo $dura_uni;
			echo $obj_uni;

			$update3 = "UPDATE actualiza_tema 
						SET NOM_UNI = '$nom_uni', DURA_UNI = '$dura_uni', OBJ_UNI = '$obj_uni', CONT_UNI = '$cont_uni', TEC_PREDO = '$tec_predo', EVA_UNI = '$eva_uni'
						WHERE COD_TEM = '$idt'";
			
			$query3 = mysqli_query($conexion,  , $conxecion, $update3);

			echo "este es el id de plan global : ".$idt;
			echo "<br>";
			echo "<br>";
			echo $update3;
	}


	if (isset($_REQUEST['upd_plan'])) {

			$cod_pg = $_POST['codpg'];
			$vers_pg = $_POST['verspg'];

			echo $cod_pg;
			echo $vers_pg;

			$razon_asig = $_POST['razon_asig'];
			$porq_asig = $_POST['porq_asig'];
			$contr_prof = $_POST['contr_prof'];
			$prop_gral = $_POST['prop_gral'];
			$obj_gral = $_POST['obj_gral'];
			$bib_gral = $_POST['bib_gral'];	
			
			$nom_uni = $_POST['nom_uni'];
			$dura_uni = $_POST['dura_uni'];
			$obj_uni = $_POST['obj_uni'];
			$cont_uni = $_POST['cont_uni'];
			$tec_predo = $_POST['tec_predo'];
			$eva_uni = $_POST['eva_uni'];
			$hab_pg = 0;

			$update8 = "UPDATE planglobal 
						SET RAZON_ASIG = '$razon_asig', PORQ_ASIG = '$porq_asig', CONTR_PROF = '$contr_prof', PROP_GRAL = '$prop_gral', OBJ_GRAL = '$obj_gral', BIB_GRAL = '$bib_gral'
						WHERE COD_PG = '$cod_pg'";
						echo $update8;
			
			$query8 = mysqli_query($conexion,  , $conxecion, $update8);

			$update3 = "INSERT INTO tema ('COD_TEM','COD_PG','VERS_PG','NOM_UNI','DURA_UNI','OBJ_UNI','CONT_UNI','TEC_PREDO','EVA_UNI')
									VALUES(NULL,'$cod_pg','$vers_pg1','$nom_uni','$dura_uni','$obj_uni','$cont_uni', '$tec_predo','$eva_uni')";
			
			$query3 = mysqli_query($conexion,  , $conxecion, $update3);
			echo "este es el id de plan global : ".$cod_pg.$vers_pg;
			echo "<br>";
			echo "<br>";
			echo $update3;
			
	}

	// Registrar  Datos de libro
if(isset($_REQUEST['new_lib']))
	{
		// Recuperando variables de add_book -----------------
		$cod_bib = $_POST['cod_bib'];
		$nom_lib = $_POST['nom_lib'];
		$autor = $_POST['autor'];			
		
		$hab_bib = 0;
		
			$insertarDato = "INSERT INTO biblioteca(`COD_BIB`, `NOM_LIB`, `AUTOR`,`HAB_BIBL`) 
									VALUES('$cod_bib','$nom_lib', '$autor', '$hab_bib')";
			echo $insertarDato;
		mysqli_query($conexion,  , $conxecion, $insertarDato);
		header("Location:libros.php?m=15");
	}


	if(isset($_REQUEST['agrega_lib']))
	{
		// Recuperando variables de new_lib -----------------
		$cod_bib = $_POST['cod_lib'];
		$nom_lib = $_POST['nom_lib'];
		$aut_lib = $_POST['aut_lib'];
		$hab = 0;
		
			$insertarDato = "INSERT INTO biblioteca(`COD_LIB`, `NOM_LIB`, `AUTOR`,`HAB_BIBL`) 
									VALUES('$cod_bib', '$nom_lib', '$aut_lib', '$hab')";
		echo $insertarDato;
		mysqli_query($conexion,  , $conxecion, $insertarDato);
	}




	Desconectar($conexion); 





?>


