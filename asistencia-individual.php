<!DOCTYPE html>

<html>

<?php
	include_once('conexion.php');
	$conexion=Conectar();
	$cod_user=$_GET['id'];
	$consulta="select * from usuario where CI_USER='$cod_user'";
	$query=mysqli_query($conexion, $consulta);
	$dato=mysqli_fetch_array($query);
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
<body class="bg-gray">
	<div class="container inmodal">
		<div class="modal-dialog-md">
			<div class="modal-content animated bounceInRight">
				<div class="modal-header">
					<a href="asistencia-individual.php" class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></a><i class="fa fa-user-plus modal-icon"></i>
					<h4 class="modal-title">Información Asistencia Participante</h4>
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
								<h1 class="font-bold text-center letter letter_style-h1-small margin-left">FUNDACIÓN PARA EL DESARROLLO DE LA EDUCACIÓN | FUNDE</h1>
							</div>
						</div>
						<div class="text-center">
							<h4>Programa maestría en educación superior Sucre, Chuquisaca (MESSRE/15) Gestión 2017/2018</h4>
						</div>
						<div class="text-center">
							<h4>INFORME DE ASISTENCIA INDIVIDUAL</h4>
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
											<td colspan="3">
												<p> <b style="font-weight: bold;">Nombre Completo:</b></p>
											</td>
											<td colspan="3">
												<div class="text-center">
												<p></p>
												</div>
											</td>
											<td colspan="3">
												<p> <b style="font-weight: bold;">Cédula de Identidad:</b></p>
											</td>
											<td colspan="3">
												<div class="text-center">
												<p></p>
												</div>
											</td>
										</tr>
										<tr>
											<td colspan="3">
												<p><b style="font-weight: bold;">Teléfono Celular:</b></p>
											</td>
											<td colspan="3">
												<div class="text-center">
												<p></p>
												</div>
											</td>
											<td colspan="3">
												<p><b style="font-weight: bold;">Correo Electrónico:</b></p>
											</td>
											<td colspan="3">
												<div class="text-center">
												<p></p>
												</div>
											</td>
										</tr>
										<tr>
											<th colspan="12">
												II Asistencia
											</th>
										</tr>
									</tbody>
								</table>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th colspan="2">
												Código
											</th>
											<th colspan="6">
												Unidad
											</th>
											<th colspan="2">
												Fecha
											</th>
											<th colspan="2">
												Asistencia
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="2">
												<div class="text-center">
													<p></p>
												</div>
											</td>
											<td colspan="6">
												<div class="text-center">
													<p></p>
												</div>
											</td>
											<td colspan="2">
												<div class="text-center">
													<p></p>
												</div>
											</td>
											<td colspan="2">
												<div class="text-center">
													<p></p>
												</div>
											</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
										<td colspan="12">
											<p><b style="font-weight: bold;">III Total Asistencias</b></p>
										</td>
										</tr>
										<tr>
											<td colspan="3">
												<p> <b>Total Asistencias</b></p>
											</td>
											<td colspan="1">
												<div class="text-center">
													<p></p>
												</div>
											</td>
											<td colspan="3">
												<p><b>Total inasistencias</b></p>
											</td>
											<td colspan="1">
												<div class="text-center">
													<p></p>
												</div>
											</td>
											<td colspan="3">
												<p><b>Total Licencias</b></p>
											</td>
											<td colspan="1">
												<div class="text-center">
												<p></p>
												</div>
											</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
					<div class="ibox-footer">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<img src="images/icons/logo funde.jpg" width="150" alt="Logo Funde | FDE">
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<img src="images/icons/logo funde.jpg" width="150" alt="Logo Funde | FDE">
							</div>
							<div class="col-md-6 col-lg-6">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="group-form">
						<div class="text-center">
							<a href="imprimir-asistenia-ind.php" class="btn btn-success btn-w-m"><span class="fa fa-print margin_right"></span> Imprimir</a>
						</div>
					</div>
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