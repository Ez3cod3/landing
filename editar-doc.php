<?php
  include_once('conexion.php');

  $id=$_REQUEST['id'];
  $doc=$_REQUEST['doc'];
  $conexion=Conectar();
  $consulta="select * from documentos where ID_DOCU='$doc'";
  $query=mysqli_query($conexion, $consulta);
  $dato=mysqli_fetch_array($query);
  $consulta1="select * from programa where COD_PROGRA = '$id'";
  $query1=mysqli_query($conexion, $consulta1);
  $dato1=mysqli_fetch_array($query1);
  $ausx=$dato['CI_USER'];
if(isset($_REQUEST['udp_docu'])){
    
    $codpro = $_POST['cod_programa'];
  $ciuser = $_POST['nom_par'];
  $cantidad_cn = $_POST['cant_nac'];
  $folio_cn = $_POST['folio_nac'];
  $num_ci = $_POST['num_ci'];
  $expedido_ci = $_POST['exp_ci'];
  $caducidad_ci = $_POST['caduca_ci'];
  $cantidad_ci = $_POST['cant_ci'];
  $emision_tpn = $_POST['emision_titu'];
  $resolucion_tpn = $_POST['num_titu'];
  $inst_tpn = $_POST['int_titu'];
  $tipo_doc_tpn = $_POST['tipo_titu'];
  $entrega_tpn = $_POST['entrega_titu'];
  $emision_da = $_POST['emision_diplo'];
  $resolucion_da = $_POST['num_diplo'];
  $inst_da = $_POST['int_diplo'];
  $tipo_doc_da = $_POST['tipo_diplo'];
  $entrega_da = $_POST['entrega_diplo'];
  $cantidad_foto = $_POST['cant_foto'];
  $detalle_foto = $_POST['detalle_foto'];
  $entrega_carta = $_POST['entrega_carta'];
  $cantidad_carta = $_POST['cant_carta'];
  $cantidad_tpn = $_POST['cant_titu'];
  $cantidad_da = $_POST['cant_diplo'];
    if($_FILES['img_func']['name']=="")
    {
      

      $consulta1="UPDATE documentos SET CANTIDAD_CN='".$cantidad_cn."', FOLIO_CN= '".$folio_cn."', NUM_CI = '".$num_ci."', EXPEDIDO_CI= '".$expedido_ci."', CADUCIDAD_CI= '".$caducidad_ci."', CANTIDAD_CI= '".$cantidad_ci."', EMISION_TPN= '".$emision_tpn."', RESOLUCION_TPN = '".$resolucion_tpn."', INST_TPN = '".$inst_tpn."', TIPO_DOC_TPN= '".$tipo_doc_tpn."', ENTREGA_TPN = '".$entrega_tpn."', EMISION_DA = '".$emision_da."', RESOLUCION_DA = '".$resolucion_da."', INST_DA = '".$inst_da."', TIPO_DOC_DA = '".$tipo_doc_da."', ENTREGA_DA = '".$entrega_da."', CANTIDAD_FOTO = '".$cantidad_foto."', DETALLE_FOTO = '".$detalle_foto."', ENTREGA_CARTA = '".$entrega_carta."', CANTIDAD_CARTA = '".$cantidad_carta."', CANTIDAD_TITU = '".$cantidad_tpn."', CANTIDAD_DIPLO = '".$cantidad_da."' WHERE documentos.ID_DOCU = '".$doc."'";
        $query1=mysqli_query($conexion, $consulta1);
      header("Location:documentacion.php?id=$id");
    }
    else
    {
      //Inserttamos la foto en una funcpeta
      $imagen = $_FILES['img_func']['name'];;
      $ruta = $_FILES['img_func']['tmp_name'];
      $destino = "img/funcions/".$imagen;
      copy($ruta, $destino);
      $consulta1="UPDATE modulo SET COD_MOD = '".$updFormu."', NOM_MOD='".$updUrl."' WHERE modulo.COD_MOD = ".$id."";
      $query1=mysqli_query($conexion, $consulta1);
      header("Location:lista-modulo.php?m=3");

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
          <a class="close" href="documentacion.php?id=<?php echo $id;?>" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></a><i class="fa fa-folder-plus modal-icon"></i>
          <h4 class="modal-title">Editar Documentación</h4><small class="font-bold">Llene correctamente todos los datos</small>
        </div>
        <div class="modal-body">
            <div class="text-center">
              <h3 class="m-t-none m-b">| Datos de registro</h3>
            </div>
        <form class="form-signin" action="#" method="post" enctype="multipart/form-data">
          <div class="form-group">
                  <label>Programa</label>
                            <input class="form-control" value="<?php echo $dato1['COD_PROGRA'];?> - <?php echo $dato1['NOM_PROGRA'];?>" name="cod_programa"  type="text">
                              
                          </div>
                          <div class="form-group">
                            <label>Participante</label>
                            <input class="form-control" value="<?php echo $dato['CI_USER'];?>" name="nom_par"  type="text">
                                                   
                          <div class="form-group">
                            <label>Certificado Nacimiento</label>
                            <div class="row">
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Cantidad</label>
                                <input class="form-control" value="<?php echo $dato['CANTIDAD_CN'];?>" name="cant_nac" type="text">
                              </div>
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Nro. Folio</label>
                                <input class="form-control" value="<?php echo $dato['FOLIO_CN'];?>" name="folio_nac" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>C.I.</label>
                            <div class="row">
                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <label>Nro. CI</label>
                                <input class="form-control" value="<?php echo $dato['NUM_CI'];?>" name="num_ci" type="text">
                              </div>
                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <label>Expedido en:</label>
                                <input class="form-control" value="<?php echo $dato['EXPEDIDO_CI'];?>" name="exp_ci" type="text">
                              </div>
                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <label>Fecha Caducidad</label>
                                <input class="form-control" value="<?php echo $dato['CADUCIDAD_CI'];?>" name="caduca_ci" type="text">
                              </div>
                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <label>Cantidad</label>
                                <input class="form-control" value="<?php echo $dato['CANTIDAD_CI'];?>" name="cant_ci" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Título en Provisión Nacional</label>
                            <div class="row">
                              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <label>Fecha Emision</label>
                                <input class="form-control" value="<?php echo $dato['EMISION_TPN'];?>" name="emision_titu" type="text">
                              </div>
                              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <label>Nro. T.P.N</label>
                                <input class="form-control" value="<?php echo $dato['RESOLUCION_TPN'];?>" name="num_titu" type="text">
                              </div>
                              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <label>Inst. Tituladora</label>
                                <input class="form-control" value="<?php echo $dato['INST_TPN'];?>" name="int_titu" type="text">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Tipo Documento</label>
                                <input class="form-control" value="<?php echo $dato['TIPO_DOC_TPN'];?>" name="tipo_titu" type="text">
                              </div>
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Cantidad</label>
                                <input class="form-control" value="<?php echo $dato['CANTIDAD_TITU'];?>" name="cant_titu" type="text">
                              </div>
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Fecha Entrega</label>
                                <input class="form-control" value="<?php echo $dato['ENTREGA_TPN'];?>" name="entrega_titu" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Diploma Académico</label>
                            <div class="row">
                              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <label>Fecha Emision</label>
                                <input class="form-control" value="<?php echo $dato['EMISION_DA'];?>" name="emision_diplo" type="text">
                              </div>
                              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <label>Nro. D.A.</label>
                                <input class="form-control" value="<?php echo $dato['RESOLUCION_DA'];?>" name="num_diplo" type="text">
                              </div>
                              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <label>Inst. Tituladora</label>
                                <input class="form-control" value="<?php echo $dato['INST_DA'];?>" name="int_diplo" type="text">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Tipo Documento</label>
                                <input class="form-control" value="<?php echo $dato['TIPO_DOC_DA'];?>" name="tipo_diplo" type="text">
                              </div>
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Cantidad</label>
                                <input class="form-control" value="<?php echo $dato['CANTIDAD_DIPLO'];?>" name="cant_diplo" type="text">
                              </div>
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Fecha Entrega</label>
                                <input class="form-control" value="<?php echo $dato['ENTREGA_DA'];?>" name="entrega_diplo" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Fotografía</label>
                            <div class="row">
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Cantidad</label>
                                <input class="form-control" value="<?php echo $dato['CANTIDAD_FOTO'];?>" name="cant_foto" type="text">
                              </div>
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Detalle</label>
                                <input class="form-control" value="<?php echo $dato['DETALLE_FOTO'];?>" name="detalle_foto" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Cartas de solicitud de admisión</label>
                            <div class="row">
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Fecha Entrega</label>
                                <input class="form-control" value="<?php echo $dato['ENTREGA_CARTA'];?>" name="entrega_carta" type="text">
                              </div>
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Cantidad</label>
                                <input class="form-control" value="<?php echo $dato['CANTIDAD_CARTA'];?>" name="cant_carta" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <div class="text-center">
                              <button class="btn btn-primary" name="udp_docu">Ingresar Datos</button>
                            </div>
                          </div>
                         

          </form>
        
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
