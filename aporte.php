
<!DOCTYPE html>
<?php
	 include_once("conexion.php");
	  $conexion = Conectar();
	  $id = $_REQUEST['id'];
	  $consulta="select * from programa where programa.COD_PROGRA = '$id'";
	  $query=mysqli_query($conexion, $consulta);
	  $dato=mysqli_fetch_array($query);
	  $consulta1="select * from usuario, programa, recibo_ingreso where usuario.COD_SIS = recibo_ingreso.MATRICULA_IN and programa.COD_PROGRA = recibo_ingreso.PROGRA_IN and programa.COD_PROGRA = '$id'";
		$query1=mysqli_query($conexion, $consulta1);
		$dato1=mysqli_fetch_array($query1);
		$sesion=$dato1['SESIONES'];
		$aporte=$dato1['APORTES'];
?>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="language" content="es">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Funde | FDE
	</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="css/plugins/switchery/switchery.css" rel="stylesheet">
	<link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">
	<link href="css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
	<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
	<link href="css/dataTables.responsive.css" rel="stylesheet">
	<link href="css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="css/plugins/cropper/cropper.min.css" rel="stylesheet">
	<link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
	<link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
	<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
	<link href="css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
	<link href="css/plugins/footable/footable.core.css" rel="stylesheet">
	<link href="css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
	<link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
	<link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
	<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
	<link href="css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
	<link href="css/plugins/iCheck/custom.css" rel="stylesheet">
	<link href="css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
	<link href="css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/stylus.css" rel="stylesheet">
	</head>
	<body>
	<?php
		session_start(); 
		$yes = $_SESSION['log']; 
		$cod = $_SESSION['cod'];
		$ids = $_SESSION['usr'];
	?>
	<header class="site-header">
		<div class="site-header-top">
		<div class="container">
			<nav class="navigation">
			<div class="row">
				<div class="col-sm-4 col-md-4">
				<input class="menu-trigger-input" type="checkbox" id="menu-trigger"><a class="site-logo" href="home.php" title="Funde | FDE"><img src="images/icons/logo funde.jpg" width="auto" alt="Logo Funde | FDE"></a>
				</div>
				<div class="col-xs-12 col-sm-8 col-md-8">
				<h1 class="font-bold text-center letter letter_style-h1">SISTEMA DE GESTIÓN ACADEMICA FUNDE </h1>
				<h3 class="font-bold text-center letter letter_style-h3">FUNDACIÓN PARA EL DESARROLLO Y LA EDUCACIÓN </h3>
				<h3 class="text-center letter letter_style-h3--small">Foundation for Development and Education </h3>
				</div>
			</div>
			</nav>
			<?php include "menu.php"; ?>
		</div>
		</div>
	</header>
	
	<div class="container">
		<div class="wrapped">
			<div class="gray-bg" id="page-wrapper" style="min-height:182px;">
				<div class="row wrapper border-bottom white-bg page-heading">
					<div class="col-lg-10">
						<h2>Lista </h2>
						<ol class="breadcrumb">
						<li><a href="home.php">Home</a></li>
						<li><a href="aportes.php">Lista de grupos</a></li>
						<li><a href="#">Lista de aportes por grupo</a></li>
						</ol>
					</div>
					<div class="col-lg-2"></div>
				</div>
				<div class="wrapper wrapper-content fadeInRight">
					<div class="row">
						<div class="col-lg-12">
							<div class="ibox float-e-margins">
								<div class="ibox-title">
									<h5> <i class="fa fa-briefcase"></i> Lista de Aportes por Grupo </h5>
								</div>
							</div>
							<div class="ibox-header">
								
							</div>
							<div class="ibox-content">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover dataTables-example">
										<thead>
											<tr>
												<th> Nombre Completo</th>
												<th> Codigo</th>
												<th> Matricula</th>
												<?php 
												for ($i=1; $i <= 18; $i++) {  
													echo "<th> Aporte ".$i."</th>";
													}?>
											</tr>
										</thead>
										<tbody>							
											<?php

											for ($i=1; $i <= 20; $i++) { 
												if($dato1=mysqli_fetch_array($query1))
													{
												echo "<tr><td>".$dato1['APE_PAT']." ".$dato1['APE_MAT']." ".$dato1['NOM_USER']." ".$dato1['OTRO_NOM']."</td>
												<td>".$dato1['COD_SIS']."</td>
												
												<td>".$dato1['MONTO_NUM']."</td>";}
												for ($j=1; $j <=18 ; $j++) {
													echo "<td>".$dato1['MONTO_NUM']."</td>";
												}
												echo "</tr>";
											}
											?>
											
										</tbody>
									</table>
								</div>
							</div>
							<div class="ibox-footer">
								<div class="text-center">
									<a href="imprimir-aporte-grupo.php" class="btn btn-success btn-w-m"><span class="fa fa-print margin_right"></span> Imprimir</a>
								</div>
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