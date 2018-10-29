<!DOCTYPE html>

<html>

<script>
	function PopupCenter(pageURL, title,w,h) {
	  var left = (screen.width/2)-(w/2);
	  var top = (screen.height/2)-(h/2);
	  var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
	}
</script>
<?php
	include_once('conexion.php');
	$conexion=Conectar();
	$cod_user=$_GET['coduser'];
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
					<a href="plantel-admin.php" class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></a><i class="fa fa-user-plus modal-icon"></i>
					<h4 class="modal-title">Información Usuario</h4>
				</div>
				<div class="modal-body">
					<table class="table table-bordered">
						<tr>
							<th colspan="4">
								<input class="menu-trigger-input" type="checkbox" id="menu-trigger"><img src="images/icons/logo funde.jpg" width="140" alt="Logo Funde | FDE">
							</th>
							<th colspan="8">
								<div class="text-center">
                        <h3 class="m-t-none m-b">SISTEMA DE GESTIÓN ACADEMICA FUNDE</h3>
                        <small>Información Usuario</small>
                      </div>
                    </th>
                  </tr>
                  <tr>
                    <th colspan="12">
                      <h3 class="m-t-none m-b">I Datos Personales</h3>
                    </th>
                  </tr>
                  <tr>
                    <th colspan="4">
                      <p>Apellido Paterno</p>
                    </th>
                    <th colspan="4">
                        <p>Apellido Materno</p>
                    </th>
                    <th colspan="4">
                      <p>Nombre Completo</p>
                    </th>
                  </tr>
                  <tr>
                    <td colspan="4">
                     <div class="text-center">
                        <p><?php echo $dato['APE_PAT']; ?></p>
                      </div>
                    </td>
                    <td colspan="4">
                      <div class="text-center">
                        <p><?php echo $dato['APE_MAT']; ?></p>
                      </div>
                    </td>
                    <td colspan="4">
                      <div class="text-center">
                        <p><?php echo $dato['NOM_USER']; ?> <?php echo $dato['OTRO_NOM']; ?></p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <p><b style="font-weight: bold;">Edad:</b></p>
                    </td>
                    <td colspan="2">
                      <div class="text-center">
                        <p><?php echo $dato['EDAD']; ?></p>
                      </div>
                    </td>
                    <td colspan="2">
                      <p><b style="font-weight: bold;">Sexo:</b></p>
                    </td>
                    <td colspan="2">
                      <div class="text-center">
                        <p><?php echo $dato['GENERO']; ?></p>
                      </div>
                    </td>  
                  </tr>
                  <tr>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">C.I./Pasaporte:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php echo $dato['CI_USER']; ?></p>
                      </div>
                    </td>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">Expedido:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php echo $dato['LUGAR_CI']; ?></p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">Nacionalidad:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php echo $dato['NACIONALIDAD']; ?></p>
                      </div>
                    </td>
                    
                  </tr>
                  <tr>
                    <td colspan="6">
                      <p><b style="font-weight: bold;">Fecha Nacimiento:</b></p>
                    </td>
                    <td colspan="6">
                      <div class="text-center">
                        <p><?php echo $dato['FEC_NAC']; ?></p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">Teléfono fijo:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();	
					            $consulta="select * from telefono where telefono.CI_USER = $cod_user and telefono.TIPO_FONO = 1";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato=mysqli_fetch_array($query);
					            echo $dato["FONO"];

					          ?></p>
                      </div>
                    </td>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">Celular:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();				
					            $consulta="select * from telefono where telefono.CI_USER = $cod_user and telefono.TIPO_FONO = 2";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato1=mysqli_fetch_array($query);
					            echo $dato1["FONO"];

					          ?></p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="6">
                      <p><b style="font-weight: bold;">Correo Electrónico:</b></p>
                    </td>
                    <td colspan="6">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();				
					            $consulta="select * from mail where mail.CI_USER = $cod_user";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato=mysqli_fetch_array($query);
					            echo $dato["MAIL"];

					          ?></p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th colspan="12">
                      <h3 class="m-t-none m-b">II Datos Profesionales</h3>
                    </th>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">Grado Académico:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();				
					            $consulta="select * from datos_profesionales where datos_profesionales.CI_USER = $cod_user";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato=mysqli_fetch_array($query);
					            echo $dato["GRADO_ACA"];

					          ?></p>
                      </div>
                    </td>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">Profesión:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();				
					            $consulta="select * from datos_profesionales where datos_profesionales.CI_USER = $cod_user";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato=mysqli_fetch_array($query);
					            echo $dato["PROFESION"];

					          ?></p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">Lugar de trabajo Actual:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();				
					            $consulta="select * from datos_profesionales where datos_profesionales.CI_USER = $cod_user";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato=mysqli_fetch_array($query);
					            echo $dato["LUGAR_TRAB"];

					          ?></p>
                      </div>
                    </td>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">Cargo Actual:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();				
					            $consulta="select * from datos_profesionales where datos_profesionales.CI_USER = $cod_user";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato=mysqli_fetch_array($query);
					            echo $dato["CARGO"];

					          ?></p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">Antigüedad:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();				
					            $consulta="select * from datos_profesionales where datos_profesionales.CI_USER = $cod_user";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato=mysqli_fetch_array($query);
					            echo $dato["ANTIGUEDAD"];

					          ?></p>
                      </div>
                    </td>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">Teléfono Oficina:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();				
					            $consulta="select * from datos_profesionales where datos_profesionales.CI_USER = $cod_user";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato=mysqli_fetch_array($query);
					            echo $dato["FONO_OFI"];

					          ?></p>
                      </div>
                    </td>
                     <tr>
                    <th colspan="12">
                      <h3 class="m-t-none m-b">III Datos Administrativos</h3>
                    </th>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">Estado Civil:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();				
					            $consulta="select * from datos_admin where datos_admin.CI_USER = $cod_user";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato=mysqli_fetch_array($query);
					            echo $dato["ESTADO_CIVIL"];

					          ?></p>
                      </div>
                    </td>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">Catindad Hijos(as):</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();				
					            $consulta="select * from datos_admin where datos_admin.CI_USER = $cod_user";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato=mysqli_fetch_array($query);
					            echo $dato["NUM_HIJOS"];

					          ?></p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">Nº de Asegurado:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();				
					            $consulta="select * from datos_admin where datos_admin.CI_USER = $cod_user";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato=mysqli_fetch_array($query);
					            echo $dato["SEGURO"];

					          ?></p>
                      </div>
                    </td>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">AFP Aportante:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();				
					            $consulta="select * from datos_admin where datos_admin.CI_USER = $cod_user";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato=mysqli_fetch_array($query);
					            echo $dato["AFP_APORTA"];

					          ?></p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">NUA/CUA:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();				
					            $consulta="select * from datos_admin where datos_admin.CI_USER = $cod_user";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato=mysqli_fetch_array($query);
					            echo $dato["NUM_NUA"];

					          ?></p>
                      </div>
                    </td>
                    <td colspan="3">
                      <p><b style="font-weight: bold;">Fecha de Contrato:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();				
					            $consulta="select * from datos_admin where datos_admin.CI_USER = $cod_user";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato=mysqli_fetch_array($query);
					            echo $dato["FEC_CONTRATO"];

					          ?></p>
                      </div>
                    </td>
                    
                  </tr>
                  <tr>
                  	 <td colspan="3">
                      <p><b style="font-weight: bold;">Telefono de Referencia:</b></p>
                    </td>
                    <td colspan="3">
                      <div class="text-center">
                        <p><?php 
							 	include_once("conexion.php");
								$conexion = Conectar();				
					            $consulta="select * from datos_admin where datos_admin.CI_USER = $cod_user";
					            $query=mysqli_query($conexion, $consulta);
					            
					            $dato=mysqli_fetch_array($query);
					            echo $dato["FONO_REF"];

					          ?></p>
                      </div>
                    </td>
                  </tr>
					</table>
					<div class="modal-footer">
						<div class="text-center">
							<a href="javascript:PopupCenter('imprimir-admin.php?$coduser=<?php echo $cod_user;?>','IMPRIMIR DOCENTE',600,500)" class="btn btn-primary btn-w-m"><i class="fa fa-print"></i> Imprimir</a>
							<a href="plantel-admin.php" class="btn btn-danger btn-w-m"> Salir</a>
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
		<script>
			$(document).ready(function () {
					$('.i-checks').iCheck({
						checkboxClass: 'icheckbox_square-green',
						radioClass: 'iradio_square-green',
					});
				});
			$(document).ready(function(){
				$('.tagsinput').tagsinput({
					tagClass: 'label label-primary'
				});
				var $image = $(".image-crop > img")
				$($image).cropper({
					aspectRatio: 1.618,
					preview: ".img-preview",
					done: function(data) {
						// Output the result data for cropping image.
					}
				});
				var $inputImage = $("#inputImage");
				if (window.FileReader) {
					$inputImage.change(function() {
						var fileReader = new FileReader(),
								files = this.files,
								file;
						if (!files.length) {
							return;
						}
						file = files[0];
			
						if (/^image\/\w+$/.test(file.type)) {
							fileReader.readAsDataURL(file);
							fileReader.onload = function () {
								$inputImage.val("");
								$image.cropper("reset", true).cropper("replace", this.result);
							};
						} else {
							showMessage("Please choose an image file.");
						}
					});
				} else {
					$inputImage.addClass("hide");
				}
			
				$("#download").click(function() {
					window.open($image.cropper("getDataURL"));
				});
			
				$("#zoomIn").click(function() {
					$image.cropper("zoom", 0.1);
				});
			
				$("#zoomOut").click(function() {
					$image.cropper("zoom", -0.1);
				});
			
				$("#rotateLeft").click(function() {
					$image.cropper("rotate", 45);
				});
			
				$("#rotateRight").click(function() {
					$image.cropper("rotate", -45);
				});
			
				$("#setDrag").click(function() {
					$image.cropper("setDragMode", "crop");
				});
			
				$('#data_1 .input-group.date').datepicker({
					todayBtn: "linked",
					keyboardNavigation: false,
					forceParse: false,
					calendarWeeks: true,
					autoclose: true
				});
			
				$('#data_2 .input-group.date').datepicker({
					startView: 1,
					todayBtn: "linked",
					keyboardNavigation: false,
					forceParse: false,
					autoclose: true,
					format: "dd/mm/yyyy"
				});
			
				$('#data_3 .input-group.date').datepicker({
					startView: 2,
					todayBtn: "linked",
					keyboardNavigation: false,
					forceParse: false,
					autoclose: true
				});
			
				$('#data_4 .input-group.date').datepicker({
					minViewMode: 1,
					keyboardNavigation: false,
					forceParse: false,
					forceParse: false,
					autoclose: true,
					todayHighlight: true
				});
			
				$('#data_5 .input-daterange').datepicker({
					keyboardNavigation: false,
					forceParse: false,
					autoclose: true
				});
			
				var elem = document.querySelector('.js-switch');
				var switchery = new Switchery(elem, { color: '#1AB394' });
			
				var elem_2 = document.querySelector('.js-switch_2');
				var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });
			
				var elem_3 = document.querySelector('.js-switch_3');
				var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });
			
				var elem_4 = document.querySelector('.js-switch_4');
				var switchery_4 = new Switchery(elem_4, { color: '#f8ac59' });
					switchery_4.disable();
			
				$('.i-checks').iCheck({
					checkboxClass: 'icheckbox_square-green',
					radioClass: 'iradio_square-green'
				});
			
				$('.demo1').colorpicker();
			
				var divStyle = $('.back-change')[0].style;
				$('#demo_apidemo').colorpicker({
					color: divStyle.backgroundColor
				}).on('changeColor', function(ev) {
							divStyle.backgroundColor = ev.color.toHex();
						});
			
				$('.clockpicker').clockpicker();
			
				$('input[name="daterange"]').daterangepicker();
			
				$('#reportrange span').php(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
			
				$('#reportrange').daterangepicker({
					format: 'MM/DD/YYYY',
					startDate: moment().subtract(29, 'days'),
					endDate: moment(),
					minDate: '01/01/2012',
					maxDate: '12/31/2015',
					dateLimit: { days: 60 },
					showDropdowns: true,
					showWeekNumbers: true,
					timePicker: false,
					timePickerIncrement: 1,
					timePicker12Hour: true,
					ranges: {
						'Today': [moment(), moment()],
						'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
						'Last 7 Days': [moment().subtract(6, 'days'), moment()],
						'Last 30 Days': [moment().subtract(29, 'days'), moment()],
						'This Month': [moment().startOf('month'), moment().endOf('month')],
						'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
					},
					opens: 'right',
					drops: 'down',
					buttonClasses: ['btn', 'btn-sm'],
					applyClass: 'btn-primary',
					cancelClass: 'btn-default',
					separator: ' to ',
					locale: {
						applyLabel: 'Submit',
						cancelLabel: 'Cancel',
						fromLabel: 'From',
						toLabel: 'To',
						customRangeLabel: 'Custom',
						daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
						monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
						firstDay: 1
					}
				}, function(start, end, label) {
					console.log(start.toISOString(), end.toISOString(), label);
					$('#reportrange span').php(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
				});
			
				$(".select2_demo_1").select2();
				$(".select2_demo_2").select2();
				$(".select2_demo_3").select2({
					placeholder: "Select a state",
					allowClear: true
				});
			
			
				$(".touchspin1").TouchSpin({
					buttondown_class: 'btn btn-white',
					buttonup_class: 'btn btn-white'
				});
			
				$(".touchspin2").TouchSpin({
					min: 0,
					max: 100,
					step: 0.1,
					decimals: 2,
					boostat: 5,
					maxboostedstep: 10,
					postfix: '%',
					buttondown_class: 'btn btn-white',
					buttonup_class: 'btn btn-white'
				});
			
				$(".touchspin3").TouchSpin({
					verticalbuttons: true,
					buttondown_class: 'btn btn-white',
					buttonup_class: 'btn btn-white'
				});
			
				$('.dual_select').bootstrapDualListbox({
					selectorMinimalHeight: 160
				});
			
			
			});
			
			$('.chosen-select').chosen({width: "100%"});
			
			$("#ionrange_1").ionRangeSlider({
				min: 0,
				max: 5000,
				type: 'double',
				prefix: "$",
				maxPostfix: "+",
				prettify: false,
				hasGrid: true
			});
			
			$("#ionrange_2").ionRangeSlider({
				min: 0,
				max: 10,
				type: 'single',
				step: 0.1,
				postfix: " carats",
				prettify: false,
				hasGrid: true
			});
			
			$("#ionrange_3").ionRangeSlider({
				min: -50,
				max: 50,
				from: 0,
				postfix: "°",
				prettify: false,
				hasGrid: true
			});
			
			$("#ionrange_4").ionRangeSlider({
				values: [
					"January", "February", "March",
					"April", "May", "June",
					"July", "August", "September",
					"October", "November", "December"
				],
				type: 'single',
				hasGrid: true
			});
			
			$("#ionrange_5").ionRangeSlider({
				min: 10000,
				max: 100000,
				step: 100,
				postfix: " km",
				from: 55000,
				hideMinMax: true,
				hideFromTo: false
			});
			
			$(".dial").knob();
			
			var basic_slider = document.getElementById('basic_slider');
			
			noUiSlider.create(basic_slider, {
				start: 40,
				behaviour: 'tap',
				connect: 'upper',
				range: {
					'min':  20,
					'max':  80
				}
			});
			
			var range_slider = document.getElementById('range_slider');
			
			noUiSlider.create(range_slider, {
				start: [ 40, 60 ],
				behaviour: 'drag',
				connect: true,
				range: {
					'min':  20,
					'max':  80
				}
			});
			
			var drag_fixed = document.getElementById('drag-fixed');
			
			noUiSlider.create(drag_fixed, {
				start: [ 40, 60 ],
				behaviour: 'drag-fixed',
				connect: true,
				range: {
					'min':  20,
					'max':  80
				}
			});
			$(document).ready(function() {
			
				$('.footable').footable();
				$('.footable2').footable();
			
			});
		</script>
		<script>
			$(document).ready(function(){
				$('.dataTables-example').DataTable({
					pageLength: 25,
					responsive: true,
					dom: '<"html5buttons"B>lTfgitp',
					buttons: [
						{extend: 'copy'},
						{extend: 'csv'},
						{extend: 'excel', title: 'ExampleFile'},
						{extend: 'pdf', title: 'ExampleFile'},
			
						{extend: 'print',
						 customize: function (win){
								$(win.document.body).addClass('white-bg');
								$(win.document.body).css('font-size', '10px');
			
								$(win.document.body).find('table')
										.addClass('compact')
										.css('font-size', 'inherit');
						}
						}
					]
			
				});
			
			});
		</script>
		<script>
			function imprimir(){ 
				if ((navigator.appName == "Netscape")) {
					window.print() ; 
				} else{
					var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>'; 
					document.body.insertAdjacentHTML('beforeEnd', WebBrowser); WebBrowser1.ExecWB(6, -1); WebBrowser1.outerHTML = "";
				}
			}
		</script>
	</body>
</html>