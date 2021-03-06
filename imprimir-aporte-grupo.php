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
<body class="white-bg">
	<div class="wrapper wrapper-content p-xl">
		<div class="wrapper wrapper-content animated fadeInRight">
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
				</div>
				<div class="text-center">
						<h4>PROGRAMA MAESTRÍA EN EDUCACIÓN SUPERIOR</h4>
						<h4>SUCRE, CHUQUISACA (MESSRE/15) GESTIÓN 2017/2018</h4>
						<h4>COSTO DEL PROGRAMA 5700</h4>
						<br>
					</div>
				<div class="text-center">
					<h4>INFORME DE APORTES INDIVIDUAL </h4>
				</div>
			</div>
			<div class="ibox-container">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>N°</th>
								<th>Apellidos y Nombre(s)</th>
								<th>M</th>
								<?php 
								for ($i=1; $i <= 18; $i++) {  
									echo "<th class='orientacion'> Aporte ".$i."</th>";
									}?>
								<th>TOTAL APORTES CANCELADOS EN BS.</th>
								<th>TOTAL APORTES POR COBRAR</th>
								<th>TUTORÍA EN $US.</th>
								<th>DEFENSA EN $US.</th>
							</tr>
						</thead>
						<tbody>
							<?php

							for ($i=1; $i <= 20; $i++) {
							 
								echo "<tr><td>".$i."</td>
								<td>Carmen Rosa Hidalgo Rodriguez</td>
								<td>".$i."</td>";
								for ($j=1; $j <=18 ; $j++) {
									echo "<td> ".$i." ".$j."</td>";
								}
								echo "
								<td></td>
								<td>".$i."</td>
								<td>".$i."</td>
								<td>".$i."</td>
								</tr>";
							}
							?>
							
						</tbody>
					</table>
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
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>                                                                                                                                                                                                                                 