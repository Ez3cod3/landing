<!DOCTYPE html>

<html>
<?php
  include_once('conexion.php');
  $conexion=Conectar();
  $cod_user=$_GET['coduser'];
  $consulta="select * from boleta_pago, usuario, datos_profesionales where boleta_pago.ID_PAGO='$cod_user' and boleta_pago.CI_USER = usuario.CI_USER and datos_profesionales.CI_USER = usuario.CI_USER";
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
<body class="white-bg">
	<div class="container inmodal">
		<div class="modal-dialog-md">
			<div class="modal-content animated bounceInRight">
				
				<div class="modal-body">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="text-center">
                  <input class="menu-trigger-input" type="checkbox" id="menu-trigger"><a href="index.html" title="Funde | FDE"><img src="images/icons/logo funde.jpg" width="190" alt="Logo Funde | FDE"></a>
                  <p>FUNDACION PARA EL DESARROLLO Y LA EDUCACION </p>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="margin-left margin-bottom">
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <label><b>NIT:</b></label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <p>211950023</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <label><b>No. Patronal</b></label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <p><?php echo $dato['PATRONAL']; ?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <label><b>Periodo</b></label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <p><?php echo $dato['PERIODO']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center margin-high_top margin-high_bottom">
                <h3>PAPELETA DE PAGO</h3>
              </div>
            </div>
            <form class="form-signin" action="" method="post" enctype="multipart/form-data">
              <div class="form-group margin-top margin-left">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label><b>NOMBRE:</b></label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="text-center">
                          <p><?php echo $dato['APE_PAT']; ?> <?php echo $dato['APE_MAT']; ?> <?php echo $dato['NOM_USER']; ?> <?php echo $dato['OTRO_NOM']; ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label><b>CARGO:</b></label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="text-center">
                          <p><?php echo $dato['CARGO']; ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                      <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                        <label><b>No. DE ASEGURADO:</b></label>
                      </div>
                      <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                        <div class="text-center">
                          <p><?php echo $dato['NUM_ASEGURADO']; ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                        <label><b>FECHA DE INGRESO:</b></label>
                      </div>
                      <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                        <div class="text-center">
                          <p><?php echo $dato['FEC_INGRESO']; ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <table class="table table-bordered">
                <tr>
                  <td colspan="6">
                    <div class="margin-left">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-bottom">
                          <label></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                          <label><b>PAPELETA PAGO</b></label>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <div class="text-center">
                            <p><?php echo $dato['HABER_BASICO']; ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                          <label><b>BONO DE ANTIGÜEDAD</b></label>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <div class="text-center">
                            <p><?php echo $dato['BONO_ANT']; ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                          <label><b>DIAS TRABAJADOS</b></label>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <div class="text-center">
                            <p><?php echo $dato['DIAS_PAGO']; ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                          <label><b>TOTAL GANADO</b></label>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <div class="text-center">
                            <p><?php echo $dato['TOTAL_GANA']; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td colspan="6">
                    <div class="text-center">
                      <label><b class="underline">DEDUCCIONES</b></label>
                    </div>
                    <div class="margin-left">
                      <div class="row">
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                          <label><b>AFP 12.71%</b></label>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <div class="text-center">
                            <p><?php echo $dato['AFP']; ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                          <label><b>ANTICIPOS</b></label>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <div class="text-center">
                            <p><?php echo $dato['ANTICIPO']; ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                          <label><b>OTROS DESCUENTOS</b></label>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <div class="text-center">
                            <p><?php echo $dato['OTROS_DES']; ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                          <label><b>DESCUENTOS ADMINISTRATIV.</b></label>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <div class="text-center">
                            <p><?php echo $dato['IVA']; ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-7 col-sm- col-md-7 col-lg-7">
                          <label><b> TOTAL DESCUENTOS</b></label>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <div class="text-center">
                            <p><?php echo $dato['TOTAL_DES']; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td colspan="7">
                    <label><b>LIQUIDO PAGABLE:</b></label>
                  </td>
                  <td colspan="5">
                    <label><b><?php echo $dato['LIQUIDO_PAGO']; ?></b></label>
                  </td>
                </tr>
                <tr>
                  <td colspan="12">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-high_bottom margin-high_top">
                        <label></label>
                        <label></label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="text-center"><b>IGOR AMPUERO MORALES </b><br><b>DIRECTOR </b></div>
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="text-center"><b><?php echo $dato['APE_PAT']; ?> <?php echo $dato['APE_MAT']; ?> <?php echo $dato['NOM_USER']; ?> <?php echo $dato['OTRO_NOM']; ?></b><br><b>FECHA DE PAGO: <?php echo $dato['FECHA_PAGO']; ?></b></div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              
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
    <script type="text/javascript">
      window.print();
    </script>
	</body>
</html>