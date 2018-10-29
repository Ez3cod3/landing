<!DOCTYPE html>

<html>

<?php
	include_once('conexion.php');
	$conexion=Conectar();
	$doc=$_REQUEST['id'];
	$consulta="select * from usuario, documentos, programa where usuario.CI_USER = documentos.CI_USER and 	documentos.COD_PROGRA = programa.COD_PROGRA and documentos.ID_DOCU = '$doc'";
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
<style type="text/css">
	th, tr,td{
		padding: 0px !important;
	}
</style>
<body class="bg-gray">
	<div class="container inmodal">
		<div class="modal-dialog-md">
			<div class="modal-content animated bounceInRight">
				<div class="modal-header">
					<a href="documentacion.php?id=<?php echo $dato['COD_PROGRA']; ?>" class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></a><i class="fa fa-user-plus modal-icon"></i>
					<h4 class="modal-title">Información Documentación de Participación</h4>
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
								</div>
							</th>
						</tr>
						<tr>
							<th colspan="18">
								<p>Información Usuario</p>
							</th>
						</tr>
						<tr>
							<th colspan="6">
								<div class="text-center">
									<p>Apellido Paterno</p>
								</div>
							</th>
							<th colspan="6">
								<div class="text-center">
									<p>Apellido Materno</p>
								</div>
							</th>
							<th colspan="6">
								<div class="text-center">
									<p>Nombre(s)</p>
								</div>
							</th>
						</tr>
						<tr>
							<td colspan="6">
								<div class="text-center">
									<p><?php echo $dato['APE_PAT']; ?></p>
								</div>
							</td>
							<td colspan="6">
								<div class="text-center">
									<p><?php echo $dato['APE_MAT']; ?></p>
								</div>
							</td>
							<td colspan="6">
								<div class="text-center">
									<p><?php echo $dato['NOM_USER']; ?> <?php echo $dato['OTRO_NOM']; ?></p>
								</div>
							</td>
						</tr>
						<tr>
							<th colspan="6">
								<div class="text-center">
									<p>Nombre Programa</p>
								</div>
							</th>
							<td colspan="12">
								<div class="text-center">
									<p><b style="font-weight: bold;"><?php echo $dato['NOM_PROGRA']; ?></b></p>
								</div>
							</td>
						</tr>
						<tr>
							<th colspan="18">
								<p><b style="font-weight: bold;">Certificado de Nacimiento</b></p>
							</th>
						</tr>
						<tr>
							<th colspan="9">
								<div class="text-center">
									<p><b style="font-weight: bold;">Cantidad</b></p>
								</div>
								
							</th>
							<th colspan="9">
								<div class="text-center">
									<p><b style="font-weight: bold;">Número Folio:</b></p>
								</div>
							</th>
						</tr>
						<tr>
							<td colspan="9">
								<div class="text-center">
									<p><?php echo $dato['CANTIDAD_CN'];?></p>
								</div>
							</td>
							
							<td colspan="9">
								<div class="text-center">
									<p><?php echo $dato['FOLIO_CN']; ?></p>
								</div>
							</td>
						</tr>
						<tr>
							<th colspan="18">
								<p><b style="font-weight: bold;">C.I./Pasaporte</b></p>
							</th>
						</tr>
						<tr>
							<th colspan="5">
								<div class="text-center">
									<p><b style="font-weight: bold;">NroC.I./Pasaporte</b></p>
								</div>
							</th>
							<th colspan="5">
								<div class="text-center">
									<p><b style="font-weight: bold;">Lugar Expedición</b></p>
								</div>
							</th>
							<th colspan="4">
								<div class="text-center">
									<p><b style="font-weight: bold;">Fecha Caducidad</b></p>
								</div>
							</th>
							<th colspan="4">
								<div class="text-center">
									<p><b style="font-weight: bold;">Cantidad</b></p>
								</div>
							</th>
						</tr>
						<tr>
							<td colspan="5">
								<div class="text-center">
									<p><?php echo $dato['CI_USER']; ?></p>
								</div>
							</td>
							<td colspan="5">
								<div class="text-center">
									<p><?php echo $dato['LUGAR_CI']; ?></p>
								</div>
							</td>
							<td colspan="4">
								<div class="text-center">
									<p><?php echo $dato['CADUCIDAD_CI']; ?></p>
								</div>
							</td>
							<td colspan="4">
								<div class="text-center">
									<p><?php echo $dato['CANTIDAD_CI']; ?></p>
								</div>
							</td>
						</tr>
						<tr>
							<th colspan="18">
								<p><b style="font-weight: bold;">Título en Provisión Nacional</b></p>
							</th>
						</tr>
						<tr>
							<th colspan="3">
								<div class="text-center">
									<p>Fecha Emisión</p>
								</div>
							</th>
							<th colspan="3">
								<div class="text-center">
									<p>Nro.Resolución</p>
								</div>
							</th>
							<th colspan="3">
								<div class="text-center">
									<p>Institución Tituladora</p>
								</div>
							</th>
							<th colspan="3">
								<div class="text-center">
									<p>Tipo Documento</p>
								</div>
							</th>
							<th colspan="3">
								<div class="text-center">
									<p>Cantidad</p>
								</div>
							</th>
							<th colspan="3">
								<div class="text-center">
									<p>Fecha Entrega</p>
								</div>
							</th>
						</tr>
						<tr>
							<td colspan="3">
								<div class="text-center">
									<p><?php echo $dato['EMISION_TPN']; ?></p>
								</div>
							</td>
							<td colspan="3">
								<div class="text-center">
									<p><?php echo $dato['RESOLUCION_TPN']; ?></p>
								</div>
							</td>
							<td colspan="3">
								<div class="text-center">
									<p><?php echo $dato['INST_TPN']; ?></p>
								</div>
							</td>
							<td colspan="3">
								<div class="text-center">
									<p><?php echo $dato['TIPO_DOC_TPN']; ?></p>
								</div>
							</td>
							<td colspan="3">
								<div class="text-center">
									<p><?php echo $dato['CANTIDAD_TITU']; ?></p>
								</div>
							</td>
							<td colspan="3">
								<div class="text-center">
									<p><?php echo $dato['ENTREGA_TPN']; ?></p>
								</div>
							</td>
						</tr>
						<tr>
							<th colspan="18">
								<p><b style="font-weight: bold;">Diploma Académico</b></p>	
							</th>
						</tr>
						<tr>
							<th colspan="3">
								<div class="text-center">
									<p>Fecha Emisión</p>
								</div>
							</th>
							<th colspan="3">
								<div class="text-center">
									<p>Nro.Resolución</p>
								</div>
							</th>
							<th colspan="3">
								<div class="text-center">
									<p>Institución Tituladora</p>
								</div>
							</th>
							<th colspan="3">
								<div class="text-center">
									<p>Tipo Documento</p>
								</div>
							</th>
							<th colspan="3">
								<div class="text-center">
									<p>Cantidad</p>
								</div>
							</th>
							<th colspan="3">
								<div class="text-center">
									<p>Fecha Entrega</p>
								</div>
							</th>
						</tr>
						<tr>
							<td colspan="3">
								<div class="text-center">
									<p><?php echo $dato['EMISION_DA']; ?></p>
								</div>
							</td>
							<td colspan="3">
								<div class="text-center">
									<p><?php echo $dato['RESOLUCION_DA']; ?></p>
								</div>
							</td>
							<td colspan="3">
								<div class="text-center">
									<p><?php echo $dato['INST_DA']; ?></p>
								</div>
							</td>
							<td colspan="3">
								<div class="text-center">
									<p><?php echo $dato['TIPO_DOC_DA']; ?></p>
								</div>
							</td>
							<td colspan="3">
								<div class="text-center">
									<p><?php echo $dato['CANTIDAD_DIPLO']; ?></p>
								</div>
							</td>
							<td colspan="3">
								<div class="text-center">
									<p><?php echo $dato['ENTREGA_DA']; ?></p>
								</div>
							</td>
						</tr>
						<tr>
							<th colspan="18">
								<p><b style="font-weight: bold;">Fotografía</b></p>
							</th>
						</tr>
						<tr>
							<th colspan="9">
								<div class="text-center">
									<p><b style="font-weight: bold;">Cantidad</b></p>
								</div>
							</th>
							<th colspan="9">
									<p><b style="font-weight: bold;">Detalle</b></p>
							</th>
						</tr>
						<tr>
							<td colspan="9">
								<div class="text-center">
									<p><?php echo $dato['CANTIDAD_FOTO']; ?></p>
								</div>
							</td>
							<td colspan="9">
								<div class="text-center">
									<p><?php echo $dato['DETALLE_FOTO']; ?></p>
								</div>
							</td>
						</tr>
						<tr>
							<th colspan="18">
								<p><b style="font-weight: bold;">Cartas de Solicitud de Admisión</b></p>
							</th>
						</tr>
						<tr>
							<th colspan="9">
								<div class="text-center">
									<p><b style="font-weight: bold;">Fecha de Entrega</b></p>
								</div>
							</th>
							<th colspan="9">
								<div class="text-center">
									<p><b style="font-weight: bold;">Cantidad</b></p>
								</div>
							</th>
						</tr>
						<tr>
							<td colspan="9">
								<div class="text-center">
									<p><b style="font-weight: bold;"><?php echo $dato['ENTREGA_CARTA']; ?></b></p>
								</div>
							</td>
							<td colspan="9">
								<div class="text-center">
									<p><b style="font-weight: bold;"><?php echo $dato['CANTIDAD_CARTA']; ?></b></p>
								</div>
							</td>
						</tr>
					</table>
					<div class="modal-footer">
						<div class="text-center">
							<a href="imprimir-documentacion.php?$coduser=<?php echo $dato['ID_DOCU'];?>" class="btn btn-primary btn-w-m"><i class="fa fa-print"></i> Imprimir</a>
							<a href="documentacion.php?id=<?php echo $dato['COD_PROGRA']; ?>" class="btn btn-danger btn-w-m"> Salir</a>
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
	</body>
</html>