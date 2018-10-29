<?php
	include_once('conexion.php');
	$id=$_REQUEST['id'];
	$conexion=Conectar();
	$consulta="select * from formulario where id_form='$id'";
	$query=mysqli_query($conexion, $consulta);
	$dato=mysqli_fetch_array($query);

	if(isset($_REQUEST['upd_formu'])){
		$updFormu=$_REQUEST['formulario'];
		$updUrl=$_REQUEST['url-form'];
		$updDesc=$_REQUEST['desc-form'];
		if($_FILES['img_func']['name']=="")
		{
			$consulta1="UPDATE formulario SET NOM_FORM = '".$updFormu."', URL_FORM='".$updUrl."', DESCRIP_FORM = '".$updDesc."' WHERE formulario.ID_FORM = ".$id."";
			$query1=mysqli_query($conexion, $consulta1);
			header("Location:listado-formularios.php?m=2");
		}
		else
		{
			//Inserttamos la foto en una funcpeta
			$imagen = $_FILES['img_func']['name'];;
			$ruta = $_FILES['img_func']['tmp_name'];
			$destino = "img/funcions/".$imagen;
			copy($ruta, $destino);
			$consulta1="UPDATE formulario SET NOM_FORM = '".$updFormu."', URL_FORM='".$updUrl."', DESCRIP_FORM = '".$updDesc."', IMG_FUN = '".$destino."' WHERE formulario.ID_FORM = ".$id."";
			$query1=mysqli_query($conexion, $consulta1);
			header("Location:listado-formularios.php?m=2");

		}
				
	}
	Desconectar($conexion);
?>
<head>
	<meta charset="utf-8">
	<meta name="language" content="es">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Funde | FDE
	</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/stylus.css" rel="stylesheet">
</head>
<body class="bg-gray">
	<div class="container inmodal">
		<div class="modal-dialog" role="document">
			<div class="modal-content animated bounceInRight">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><i class="fa fa-plus-square modal-icon"></i>
					<h3 class="modal-title">Editar Formulario del Sistema</h3>
				</div>
				<div class="modal-body">
					<form class="form-signin" action="#" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Función</label>
							<input class="form-control" type="text" name="formulario" id="formulario" required value="<?php echo $dato['NOM_FORM']; ?>">
						</div>
						<div class="form-group">
							<label>URL</label>
							<input class="form-control" name="url-form" id="url-form" value="<?php echo $dato['URL_FORM']; ?>">
						</div>
						<div class="form-group">
							<label>Descripción</label>
							<textarea class="form-control" name="desc-form" id="desc-form" required rows="3"><?php echo $dato['DESCRIP_FORM']; ?></textarea>
						</div>
						<div class="modal-footer">
							<div class="text-center">
								<button name="upd_formu" class="btn btn-success btn-w-m" type="submit"><i class="fa fa-check margin"> </i>Actualizar Datos</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<script src="js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
</body>