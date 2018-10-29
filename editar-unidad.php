<?php
	include_once('conexion.php');
	$id=$_REQUEST['coduni'];
	$conexion=Conectar();
	$consulta="select * from unidad where COD_UNI='$id'";
	$query=mysqli_query($conexion, $consulta);
	$dato=mysqli_fetch_array($query);

	if(isset($_REQUEST['upd_uni'])){
		$updFormu=$_REQUEST['cod_u'];
		$updUrl=$_REQUEST['nom_u'];
		$cod_m = $_REQUEST['cod_m'];
		$fecha = $_REQUEST['fecha'];
		$docente = $_REQUEST['docente'];
		if($_FILES['img_func']['name']=="")
		{
			$consulta12="UPDATE unidad SET COD_MOD = '".$cod_m."', NOM_UNI='".$updUrl."', FECHA_UNI= '".$fecha."', DOC_UNI='".$docente."' WHERE unidad.COD_UNI = '".$id."'";
			$query12=mysqli_query($conexion, $consulta12);
			header("Location:lista-unidades.php?m=5");
		}
		else
		{
			//Inserttamos la foto en una funcpeta
			$imagen = $_FILES['img_func']['name'];;
			$ruta = $_FILES['img_func']['tmp_name'];
			$destino = "img/funcions/".$imagen;
			copy($ruta, $destino);
			$consulta1="UPDATE unidad SET COD_UNI='".$updFormu."', COD_MOD = '".$cod_m."', NOM_UNI='".$updUrl."', FECHA_UNI= '".$fecha."', DOC_UNI='".$docente."' WHERE unidad.COD_UNI = '".$id."'";
			$query1=mysqli_query($conexion, $consulta1);
			header("Location:lista-unidades1.php?m=6");

		}
				
	}
	$consulta1="select * from modulo";
	$query1=mysqli_query($conexion, $consulta1);
	$dato1=mysqli_fetch_array($query1);
	$identi=0;
	$consulta2="select * from usuario where TIPO_USER = 3";
	$query2=mysqli_query($conexion, $consulta2);
	$identi=0;
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
		<link href="css/plugins/select2/select2.min.css" rel="stylesheet">
		<link href="css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
		<link href="css/plugins/select2/select2.min.css" rel="stylesheet">
		<link href="css/plugins/dualListbox/bootstrap-duallistbox.min.css" rel="stylesheet">
		<link href="css/plugins/iCheck/custom.css" rel="stylesheet">
		<link href="css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
		<link href="css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/stylus.css" rel="stylesheet">
	
</head>
<body class="bg-gray">
	<div class="container inmodal">
		<div class="modal-dialog">
			<div class="modal-content animated bounceInRight">
				<div class="modal-header">
					<a href="lista-unidades.php" class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></a><i class="fa fa-user-plus modal-icon"></i>
					<h4 class="modal-title">Información Usuario</h4>
				</div>
				<div class="modal-body">
					<div class="text-center">
						<h3 class="m-t-none m-b">| Datos Unidad</h3>
					</div>
				<form class="form-signin" action="#" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="form-group">
									<label>Código Módulo</label>
									<select class="chosen-select" name="cod_m" data-placeholder="Selecionar módulo" tabindex="2">
										<option  value="<?php echo $dato1['COD_MOD'];?>"><?php echo $dato1['COD_MOD'];?> - <?php echo $dato1['NOM_MOD'];?></option>
									  <?php
											  while($dato1=mysqli_fetch_array($query1))
											  {?>
											  <option value="<?php echo $dato1['COD_MOD'];?>"><?php echo $dato1['COD_MOD'];?> - <?php echo $dato1['NOM_MOD'];?></option>
											<?php } 
										  ?>
									</select>
								</div>
							</div>
							
						</div>
					</div>
					<div class="form-group">
						<label>Unidad</label>
						<input class="form-control" value="<?php echo $dato['NOM_UNI'];?> - " type="text" name="nom_u">
					</div>
					<div class="form-group">
						<label>Fecha</label>
						<div class="input-group date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							<input class="form-control" type="text" value="<?php echo $dato['FECHA_UNI'];?>"" name="fecha">
						</div>
					</div>
					<div class="form-group">
						<label>Docente</label>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<select class="chosen-select" data-placeholder="Nombre Docente" tabindex="2" name="docente">
									<option value="">Nombre Docente</option>
									 <?php 
											while($dato3=mysqli_fetch_array($query2))
											{?>
											<option value="<?php echo $dato3['CI_USER'];?>"><?php echo $dato3['APE_PAT'];?> <?php echo $dato3['APE_MAT'];?> <?php echo $dato3['NOM_USER'];?> <?php echo $dato3['OTRO_NOM'];?></option>
										<?php } 
										?>
								</select>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div class="text-center">
							<div class="controls margin_bottom text-center margin_bottom">
			                  <button class="btn btn-success btn-w-m button" name="upd_uni" type="submit">Actualizar Datos</button>
			                  <a class="btn btn-info btn-w-m button" href="lista-unidades.php">Cancelar</a>
			                </div>
			              </div>	
					</div>
				</form>
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
