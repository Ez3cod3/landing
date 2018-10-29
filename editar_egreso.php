<?php
  include_once('conexion.php');

  $id=$_REQUEST['m'];
  $conexion=Conectar();
  $consulta="select * from recibo_egreso where ID_RE_EG='$id' ";
  
  $query=mysqli_query($conexion, $consulta);
 
  $dato=mysqli_fetch_array($query);

 
 
  if(isset($_REQUEST['upd_egreso'])){
 $cod_re = $_POST['cod_re_e'];
  
  $monto_re = $_POST['monto_re_e'];
  $monto_re_le = $_POST['monto_es_e'];
  $nom_caj = $_POST['cajero_rec_in']; 
  $recibidor = $_POST['cancelo_re_e'];
  $fec_eg = $_POST['fecha_re_e'];
  $item_eg = $_POST['item'];
  $subitem_eg = $_POST['subitem'];
  $caja = $_POST['caja'];
  $lugar = $_POST['lugar_re_e'];
  $desc = $_POST['des_egre'];
    if($_FILES['img_func']['name']=="")
    {
      

      $consulta3="UPDATE recibo_egreso SET CAJA = '".$caja."', RECIBIDOR='".$recibidor."', MONTO_EG_NUM= '".$monto_re."', MONTO_EG_ESC = '".$monto_re_le."', ITEM = '".$item_eg."', SUBITEM = '".$subitem_eg."', LUGAR_EG = '".$lugar."', FEC_EG = '".$fec_eg."', CAJERO = '".$nom_caj."', DESC_EGRE = '".$desc."' WHERE ID_RE_EG = '".$id."'";
      $query3=mysqli_query($conexion, $consulta3);
      header("Location:lista_recibo_ingreso.php?m=2");
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
  <?php 
  session_start(); 
  $yes = $_SESSION['log'];
  $cod = $_SESSION['cod'];
  $ids = $_SESSION['usr'];
    ?>
</head>
<body class="bg-gray">
  <div class="container inmodal">
    <div class="modal-dialog">
      <div class="modal-content animated bounceInRight">
        <div class="modal-header">
          <a class="close" href="lista_recibo_ingreso.php" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></a><i class="fa fa-folder-plus modal-icon"></i>
          <h4 class="modal-title">Editar Recibo Egreso</h4><small class="font-bold">Llene correctamente todos los datos</small>
        </div>
     <div class="modal-body">
                  <div class="text-center">
                    <h3 class="m-t-none m-b">| Recibo Egresos</h3>
                  </div>
                  <form class="form-signin" action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Tipo caja</label>
                          <select class="chosen-select" tabindex="2" name="caja">
                            <option value="<?php echo $dato['CAJA'];?>"><?php echo $dato['CAJA'];?></option>
                            <option value="Caja Chica">Caja Chica</option>
                            <option value="Caja Grande">Caja Grande</option>
                          </select>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Se Canceló a:</label>
                      <input class="form-control" placeholder="Nombre Completo" name="cancelo_re_e" type="text" required value="<?php echo $dato['RECIBIDOR'];?>">
                    </div>
                    <div class="form-group">
                      <label>La suma de:</label>
                      <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                          <input class="form-control" placeholder="Ingrese monto" name="monto_re_e" type="text" required value="<?php echo $dato['MONTO_EG_NUM'];?>">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                          <input class="form-control" placeholder="Ingrese monto escrito" name="monto_es_e" type="text" required value="<?php echo $dato['MONTO_EG_ESC'];?>">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Por concepto de:</label>
                          <select class ="chosen-select" tabindex="2" name="item">
                            <option value="<?php echo $dato['ITEM'];?>"><?php echo $dato['ITEM'];?></option>
                            <option value="Transporte">1. Transporte</option>
                            <option value="Alimentación">2. Alimentación</option>
                            <option value="Honorarios">3. Honorarios</option>
                            <option value="Hospedajes">4. Hospedajes</option>
                            <option value="Comunicaciones">5. Comunicaciones</option>
                            <option value="Servicios">6. Servicios</option>
                            <option value="Impuestos Nacionales">7. Impuestos Nacionales</option>
                            <option value="Servicios Laborales">8 .Servicios Laborales</option>
                            <option value="Limpieza">9. Limpieza</option>
                            <option value="Alquileres">10. Alquileres</option>
                            <option value="Mantenimiento de Equipos e insumos">11. Mantenimiento de Equipos e insumos</option>
                            <option value="Materiales">12. Materiales</option>
                            <option value="Correspondecia">13. Correspondecia</option>
                            <option value="Miscelaneos - Contingencias">14. Miscelaneos - Contingencias</option>
                          </select>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <div class="form-group">
                            <label>Sub-item</label>
                            <select class="chosen-select" tabindex="2" name="subitem">
                              <option value="<?php echo $dato['SUBITEM'];?>"><?php echo $dato['SUBITEM'];?></option>
                              <option value="Terrestre">1.1 Terrestre</option>
                              <option value="Aéreo">1.2 Aéreo</option>
                              <option value="Logistico">1.3 Logistico</option>
                              <option value="Combustible">1.4 Combustible</option>
                              <option value="Refrigerios">2.1 Refrigerios</option>
                              <option value="Refrigerios personal">2.2 Refrigerios personal</option>
                              <option value="Refrigerios de direccion">2.3 Refrigerios de direccion</option>
                              <option value="Docentes por sesión">3.1 Docentes por sesión</option>
                              <option value="Docentes por atencion virtual">3.2 Docentes por atencion virtual</option>
                              <option value="Consultorias">3.3 Consultorias</option>
                              <option value="Apoyos logisticos">3.4 Apoyos logisticos</option>
                              <option value="Planilla de Salarios">3.5 Planilla de Salarios</option>
                              <option value="Bonos Productivos">3.6 Bonos Productivos</option>
                              <option value="Hotel">4.1 Hotel</option>
                              <option value="Hostal">4.2 Hostal</option>
                              <option value="Alojamiento">4.3 Alojamiento</option>
                              <option value="celulares">5.1 Celulares</option>
                              <option value="telefonia fija">5.2 Telefonia fija</option>
                              <option value="internet">5.3 Internet</option>
                              <option value="Luz Electrica">6.1 Luz Electrica</option>
                              <option value="Agua">6.2 Agua</option>
                              <option value="Expensas">6.3 Expensas</option>
                              <option value="Parqueo">6.4 Parqueo</option>
                              <option value="De Oficina">9.1 De Oficina</option>
                              <option value="De Aulas">9.2 De Aulas</option>
                              <option value="Oficinas">10.1 Oficinas</option>
                              <option value="Ambientes">10.2 Ambientes</option>
                              <option value="Fotocopias">12.1 Fotocopias</option>
                              <option value="De Escritorio">12.2 De Escritorio</option>
                              <option value="De Limpieza">12.3 De Limpieza</option>
                              <option value="Impresion de Comprobantes">12.3 Impresion de Comprobantes</option>
                              <option value="Envios por Courrier">13.1 Envios por Courier</option>
                              <option value="Envios por transporte terrestre y aereo">13.2 Envios por trnasporte terrestre y aereo</option>
                              
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Descripción</label>
                      <input class="form-control" placeholder="Descripción" name="des_egre" type="text" required value="<?php echo $dato['DESC_EGRE'];?>">
                    </div>
                    <div class="form-group">
                      <label>Lugar</label>
                      <input class="form-control" placeholder="Lugar" name="lugar_re_e" type="text" required value="<?php echo $dato['LUGAR_EG'];?>">
                    </div>
                    <div class="form-group">
                      <label>Fecha</label>
                      <input class="form-control" type="date" name="fecha_re_e" placeholder="Ingrese fecha" required value="<?php echo $dato['FEC_EG'];?>">
                    </div>
                   
                    <div class="form-group">
                      <label>Cajera</label>
                      <input class="form-control" value="<?php echo $dato['CAJERO'];?>" name="cajero_rec_in" type="text">
                    </div>
                    <div class="modal-footer">
                      <div class="text-center">
                        <div class="controls margin_bottom text-center margin_bottom">
                                <button class="btn btn-success btn-w-m button" name="upd_egreso" type="submit">Actualizar Datos</button>
                                <a class="btn btn-info btn-w-m button" href="lista_recibo_ingreso.php">Cancelar</a>
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
