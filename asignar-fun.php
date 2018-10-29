<!DOCTYPE html>

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
		<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
		<link href="css/dataTables.responsive.css" rel="stylesheet">
		<link href="css/dataTables.bootstrap.css" rel="stylesheet">
		<link href="css/plugins/select2/select2.min.css" rel="stylesheet">
		<link href="css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
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
							<h2>Lista de Funciones por Rol</h2>
							<ol class="breadcrumb">
								<li><a href="home.php">Home</a></li>
								<li><a href="#">Lista de funciones por rol</a></li>
							</ol>
						</div>
						<div class="col-lg-2"></div>
					</div>
					<div class="wrapper wrapper-content animated fadeInRight">
						<div class="row">
							<div class="col-lg-12">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5> <i class="fa fa-briefcase"></i> Lista de funciones por rol</h5>
									</div>
								</div>
								<div class="ibox-content">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover dataTables-example" id="dataTables-example">
											<thead>
												<tr role="row">
													<th>#</th>
													<th>Rol</th>
													<th>Función</th>
													<th>Eliminar</th>
												</tr>
											</thead>
											<tbody>
												<?php 
													include_once("conexion.php");
													$conexion = Conectar();
													$cont=0;
													$consulta="select * from funcion as f, rol as r, rol_funcion as rf where rf.ID_ROL = r.ID_ROL and rf.ID_FUN = f.ID_FUN";
													$query=mysqli_query($conexion, $consulta);
													$identi=0;
													while($dato=mysqli_fetch_array($query))
													{
														$cont++;
														echo "
														<tr>
															<td >".$cont."</td>
															<td>".$dato["NOMB_ROL"]."</td>
															<td >".$dato["NOM_FUN"]."</td>
															<td>
																<div class='text-center'>
																	<a href='delete-asig-fun.php?id=".$dato["ID_ROL_FUN"]."'><span class='fa fa-times'></span></a></div></td>
														</tr>";
														}
													?>
											</tbody>
										</table>
									</div>
									<div class="control-group">
										<div class="controls text-center"><a class="btn btn-success btn-w-m margin_bottom" href="#asignar-rol" data-toggle="modal"><i class="fa fa-plus margin"></i>Nuevo</a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal inmodal" id="asignar-rol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content animated bounceInRight">
									<div class="modal-header">
										<button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><i class="fa fa-plus-square modal-icon"></i>
										<h3 class="modal-title">Asignar formularios a cada función</h3>
									</div>
									<div class="modal-body">
										<form class="form-signin" action="configure.php" method="post" enctype="multipart/form-data">
											<div class="form-group">
												<label>Rol</label>
												<div>
													<select class="chosen-select" name="rol" tabindex="2">
														<option value="">Seleccionar</option>
														<?php 
															$consulta="select * from rol";
															$query=mysqli_query($conexion, $consulta);
															$identi=0;
															while($dato=mysqli_fetch_array($query))
															{?>
															<option value="<?php echo $dato['ID_ROL'];?>"><?php echo $dato['NOMB_ROL'];?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label>Función</label>
												<div>
													<select class="chosen-select" name="funcion" tabindex="2">
														<option value="">Seleccionar</option>
														<?php 
															$consulta="select * from funcion";
															$query=mysqli_query($conexion, $consulta);
															$identi=0;
															while($dato=mysqli_fetch_array($query))
															{?>
															<option value="<?php echo $dato['ID_FUN'];?>"><?php echo $dato['NOM_FUN'];?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="modal-footer">
												<div class="text-center">
													<button class="btn btn-success btn-w-m" name="asig-fun" type="input"><i class="fa fa-check margin"> </i>Guardar Datos</button>
												</div>
											</div>
										</form>
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
			<script src="js/plugins/chosen/chosen.jquery.js"></script>
			<script src="js/plugins/select2/select2.full.min.js"></script>
			<script src="js/inspinia.js" type="text/javascript"></script>
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