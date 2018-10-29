<!DOCTYPE html>

<html>
<?php
	include_once('conexion.php');
	$conexion=Conectar();
	$cod_user=$_REQUEST['id'];
	$codpro=$_REQUEST['pro'];
	$ciuser=$_REQUEST['ci'];
	$consulta="select * from usuario, telefono, mail, recibo_ingreso where usuario.CI_USER='$ciuser' and telefono.CI_USER='$ciuser' and mail.CI_USER='$ciuser' and telefono.TIPO_FONO = '2' ";
	$consulta1="select * from recibo_ingreso where MATRICULA_IN = '$cod_user' and PROGRA_IN = '$codpro' ORDER BY FEC_IN ASC";
	$consulta2="select * from programa where COD_PROGRA = '$codpro'";
	$consulta3="select SUM(MONTO_NUM) from recibo_ingreso where PROGRA_IN = '$codpro' and MATRICULA_IN = '$cod_user' and TIPO_IN = 'aporte'";
	$query=mysqli_query($conexion, $consulta);
	$dato=mysqli_fetch_array($query);
	$query1=mysqli_query($conexion, $consulta1);
	$query2=mysqli_query($conexion, $consulta2);
	$query3=mysqli_query($conexion, $consulta3);
	$dato2=mysqli_fetch_array($query2);
	$dato3=mysqli_fetch_array($query3);
	
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
<?php 
	session_start(); 
	$yes = $_SESSION['log'];
	$cod = $_SESSION['cod'];
	$ids = $_SESSION['usr'];
?>
<body class="white-bg">
	<div class="container inmodal">
		<div class="modal-dialog-md">
			<div class="modal-content animated bounceInRight">
				<div class="modal-header">
					<a href="participantes_programa.php?id=<?php echo $codpro;?>" class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</a><i class="fa fa-user-plus modal-icon"></i>
					<h4 class="modal-title">Información Aportes Usuario</h4>
				</div>
				<div class="modal-body">
					<div class="ibox-header">
						<div class="row">
							<div class="col-sm-3 col-md-3">
								<div class="text-center">
									<img src="images/icons/logo funde.jpg" width="150" alt="Logo Funde | FDE">
								</div>
							</div>
							<div class="col-xs-12 col-sm-9 col-md-9">
								<h1 class="font-bold text-center letter letter_style-h1-small margin-left">FUNDACIÓN PARA EL DESARROLLO Y LA EDUCACIÓN | FUNDE</h1>
							</div>
							<div class="text-center">
								<h4><?php echo $dato2["NOM_PROGRA"];?> <?php echo $dato2["LOCALIDAD"];?>, <?php echo $dato2["DEPARTAMENTO"];?> (<?php echo $dato2["COD_PROGRA"];?>) <?php echo $dato2["GESTION_INI"];?>/<?php echo $dato2["GESTION_FIN"];?></h4>
							</div>
						</div>
						<div class="text-center">
							<h4>EXTRACTO DE APORTES</h4>
						</div>
					</div>
					<div class="ibox-container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th colspan="12">
												I Datos Personales
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="2">
												<p> <b style="font-weight: bold;">Nombre Completo:</b></p>
											</td>
											<td colspan="4">
												<div class="text-center">
													<p><?php echo $dato["APE_PAT"];?> <?php echo $dato["APE_MAT"];?> <?php echo $dato["NOM_USER"];?> <?php echo $dato["OTRO_NOM"];?></p>
												</div>
											</td>
											<td colspan="2">
												<p> <b style="font-weight: bold;">Cédula de Identidad:</b></p>
											</td>
											<td colspan="4">
												<div class="text-center">
													<p><?php echo $dato["CI_USER"];?></p>
												</div>
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<p><b style="font-weight: bold;">Teléfono Celular:</b></p>
											</td>
											<td colspan="4">
												<div class="text-center">
													<p><?php echo $dato["FONO"];?></p>
												</div>
											</td>
											<td colspan="2">
												<p><b style="font-weight: bold;">Correo Electrónico:</b></p>
											</td>
											<td colspan="4">
												<div class="text-center">
													<p><?php echo $dato["MAIL"];?></p>
												</div>
											</td>
										</tr>
										<tr>
											<th colspan="12">
												II Aportes
											</th>
										</tr>
									</tbody>
								</table>
								<table class="table table-bordered">

									<thead>
										<tr>
											<th colspan="2">
												APORTE
											</th>
											<th colspan="2">
												NRO. DE RECIBO
											</th>
											<th colspan="2">
												FECHA
											</th>
											<th colspan="3">
												MONTO Bs.
											</th>
											<th colspan="3">
												OBSERVACIONES
											</th>
										</tr>
									</thead>

									<tbody>
										<?php
										$cont=0;
									while($dato1=mysqli_fetch_array($query1))
													{
													$cont++;
													echo"
										<tr>
											<td colspan='2'>
												<div class='text-center'>
													<p>".$dato1["TIPO_IN"]."</p>
												</div>
											</td>
											<td colspan='2'>
												<div class='text-center'>
													<p>".$dato1["ID_RE_IN"]."</p>
												</div>
											</td>
											<td colspan='2'>
												<p>".$dato1["FEC_IN"]."</p>
											</td>
											<td colspan='3'>
												<div class='text-center'>
													<p>".$dato1["MONTO_NUM"]."</p>
												</div>
											</td>
											<td colspan='3'>
												<div class='text-center'>
													<p>".$dato1["DES_IN"]."</p>
												</div>
											</td>
										</tr>";}?>
										<td colspan='3'>
												<div class="text-center">
													<p>Total Aportes Pagados:       <?php echo $dato3["SUM(MONTO_NUM)"];?></p>
												</div>
											</td>
									</tbody>

									
								</table>
							</div>
						</div>
					</div>
					 <div class="text-center">
            <img src="images/icons/osstf.png" width="140" alt="">
            <img src="images/icons/bctf.png" width="50" alt="">
          </div>
				</div>
				<div class="modal-footer">
					<div class="text-center">
						<a href="imprimir-aporte.php?id=<?php echo $cod_user;?>&pro=<?php echo $codpro;?>&ci=<?php echo $ciuser;?>" class="btn btn-success btn-w-m"><span class="fa fa-print margin_right"></span> Imprimir</a>
					</div>
				</div>
			</div>
		</div>
	</div>
		<script src="js/jquery-3.2.1.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/plugins/dataTables/datatables.min.js"></script>
		<script src="js/plugins/metisMenu/jquery.metisMenu.js" type="text/javascript"></script>
		<script src="js/plugins/slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
		<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
		<script src="js/plugins/jsKnob/jquery.knob.js"></script>
		<script src="js/plugins/chosen/chosen.jquery.js"></script>
		<script src="js/plugins/footable/footable.all.min.js"></script>
		<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
		<script src="js/plugins/nouslider/jquery.nouislider.min.js"></script>
		<script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
		<script src="js/plugins/clockpicker/clockpicker.js"></script>
		<script src="js/plugins/select2/select2.full.min.js"></script>
		<script src="js/plugins/cropper/cropper.min.js"></script>
		<script src="js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script><!-- Flot -->
		<script src="js/plugins/flot/jquery.flot.js" type="text/javascript"></script>
		<script src="js/plugins/flot/jquery.flot.tooltip.min.js" type="text/javascript"></script>
		<script src="js/plugins/switchery/switchery.js"></script>
		<script src="js/plugins/flot/jquery.flot.spline.js" type="text/javascript"></script>
		<script src="js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="js/plugins/fullcalendar/moment.min.js"></script>
		<script src="js/plugins/daterangepicker/daterangepicker.js"></script>
		<script src="js/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
		<script src="js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<script src="js/plugins/flot/jquery.flot.pie.js" type="text/javascript"></script>
		<script src="js/plugins/dualListbox/jquery.bootstrap-duallistbox.js"></script><!-- Peity -->
		<script src="js/plugins/peity/jquery.peity.min.js" type="text/javascript"></script>
		<script src="js/demo/peity-demo.js" type="text/javascript"></script><!-- Custom and plugin javascript -->
		<script src="js/inspinia.js" type="text/javascript"></script>
		<script src="js/plugins/pace/pace.min.js" type="text/javascript"></script><!-- jQuery UI -->
		<script src="js/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script><!-- GITTER -->
		<script src="js/plugins/gritter/jquery.gritter.min.js" type="text/javascript"></script><!-- Sparkline -->
		<script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script><!-- Sparkline demo data  -->
		<script src="js/demo/sparkline-demo.js" type="text/javascript"></script><!-- ChartJS-->
		<script src="js/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
		<script src="js/plugins/iCheck/icheck.min.js"></script>
	</body>
</html>