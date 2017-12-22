<!DOCTYPE html>
<!--if lt IE 7html.no-js.lt-ie9.lt-ie8.lt-ie7
-->
<!--if IE 7html.no-js.lt-ie9.lt-ie8
-->
<!--if IE 8html.no-js.lt-ie9
-->
<!--[if gt IE 8]><!-->
<html>
	<!--<![endif]\-->
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
		<link href="css/dataTables.responsive.css" rel="stylesheet">
		<link href="css/dataTables.bootstrap.css" rel="stylesheet">
		<link href="css/plugins/cropper/cropper.min.css" rel="stylesheet">
		<link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
		<link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
		<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
		<link href="css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
		<link href="css/plugins/footable/footable.core.css" rel="stylesheet">
		<link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
		<link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
		<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
		<link href="css/plugins/select2/select2.min.css" rel="stylesheet">
		<link href="css/plugins/iCheck/custom.css" rel="stylesheet">
		<link href="css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/stylus.css" rel="stylesheet">
	</head>
	<body class="gray-bg">
		<div class="middle-box text-center loginscreen animated fadeInDown">
			<div>
				<label class="site-logo site-logo_image full-width text-center" title="Funde | FDE"><img src="images/icons/logo funde.jpg" width="auto" alt="Logo Funde | FDE"></label>
				<h3>Registrarse</h3>
				<p>Crear cuenta de usuario</p>
			</div>
			<form class="m-t" role="form" action="register.php">
				<div class="form-group">
					<input class="form-control" placeholder="Ingrese apellido paterno" type="text" name="ap-pat">
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Ingrese apellido materno" type="text" name="ap-mat">
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Ingrese nombre completo" type="text" name="nombre" required>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-7">
							<div class="input-group date">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span><input class="form-control" name="date" type="date" value="03/04/2014">
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-5">
							<input class="form-control" name="age" placeholder="Edad" type="text">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<input class="form-control" placeholder="Numero de CI" type="text" name="ci" pattern="[0-9]+.{6,}" required>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<select class="chosen-select" name="departamento" data-placeholder="Escoge un Departamento" tabindex="2">
								<option value="">Seleccionar</option>
								<option value="Cochabamba">Cochabamba</option>
								<option value="Sucre">Sucre</option>
								<option value="Potosí">Potosí</option>
								<option value="Santa Cruz">Santa Cruz</option>
								<option value="La Paz">La Paz</option>
								<option value="Tarija">Tarija</option>
								<option value="Oruro">Oruro</option>
								<option value="Pando">Pando</option>
								<option value="Beni">Beni</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="form-inline">
						<label>
							<input class="i-checks margin" type="checkbox" name="mujer">Mujer
						</label>
						<label>
							<input class="i-checks margin" type="checkbox" name="hombre">Hombre
						</label>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<input class="form-control" placeholder="Número de celular" type="text" name="celular">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<input class="form-control" placeholder="Numero de telefono fijo" type="text" name="telefono">
						</div>
					</div>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Ingrese e-mail" type="mail">
				</div>
				<div class="text-center">
					<h3 class="m-t-none m-b">| Datos Profesionales</h3>
				</div>
				<form class="form-singin" action="register.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<input class="form-control" placeholder="Grado académico" type="text" name="grado">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<input class="form-control" placeholder="Profesión" type="text" name="profesion">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<input class="form-control" placeholder="Lugar de trabajo" type="text" name="trabajo">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<input class="form-control" placeholder="Cargo" type="text" name="cargo">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<input class="form-control" placeholder="Antigüedad" type="text" name="old">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<input class="form-control" placeholder="Teléfono de oficina" type="text" name="oficina">
							</div>
						</div>
					</div>
					<div class="form-group"><a class="btn btn-sm btn-white btn-block" href="login.php">Registrar</a></div>
				</form>
			</form>
		</div>
		<script src="js/jquery-3.2.1.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
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
		<!-- Peity -->
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
		</script>
	</body>
</html>