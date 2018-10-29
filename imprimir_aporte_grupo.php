<!DOCTYPE html>

<html>
<?php
   include_once("conexion.php");
    $conexion = Conectar();
    $id = $_REQUEST['id'];
    $num = $_REQUEST['num'];
    $consulta="select * from programa where programa.COD_PROGRA = '$id'";
    $query=mysqli_query($conexion, $consulta);
    $dato=mysqli_fetch_array($query);
    $consulta1="select * from usuario, programa, recibo_ingreso where usuario.COD_SIS = recibo_ingreso.MATRICULA_IN and programa.COD_PROGRA = recibo_ingreso.PROGRA_IN and programa.COD_PROGRA = '$id'  
      ORDER BY `usuario`.`COD_SIS` ASC";
    $consulta2="select COUNT(*) from matricula, usuario where matricula.CI_USER = usuario.CI_USER and matricula.COD_PROGRA = '$id'";  
    $query1=mysqli_query($conexion, $consulta1);
    $query2=mysqli_query($conexion, $consulta2);
    $dato1=mysqli_fetch_array($query1);
    $dato2=mysqli_fetch_array($query2);
    $participantes=$dato2['COUNT(*)'];
    $sesion=$dato1['SESIONES'];
    $aporte=$dato1['APORTES'];
    $costo=$dato['COSTO'];
     $ap = $dato['APORTE'];
    $aux2 = $ap * $num;
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
					<div class="col-sm-1 col-md-1">
						<div class="text-center">
							<img src="images/icons/logo funde.jpg" width="150" alt="Logo Funde | FDE">
						</div>
					</div>
					<div class="col-xs-12 col-sm-11 col-md-11">
						<h1  class="font-bold text-center letter letter_style-h1-small margin-left">FUNDACIÓN PARA EL DESARROLLO Y LA EDUCACIÓN | FUNDE</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-1 col-md-1"></div>
					<div class="col-sm-11 col-md-11">
						<div class="text-center">
							<h4><?php echo $dato["NOM_PROGRA"]?></h4>
							<h4><?php echo $dato["LOCALIDAD"]?>, <?php echo $dato["DEPARTAMENTO"]?> (<?php echo $dato["COD_PROGRA"]?>) GESTIÓN <?php echo $dato["GESTION_INI"]?>/<?php echo $dato["GESTION_FIN"]?></h4>
							<h4>COSTO DEL PROGRAMA <?php echo $dato["COSTO"]?> Bs.</h4>
							<h4>Nro. DE APORTES <?php echo $dato["APORTES"]?> Bs.</h4>
							<br>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-1 col-md-1"></div>
					<div class="col-sm-11 col-md-11">
						<div class="text-center">
							<h4>INFORME DE APORTES POR GRUPO </h4>
						</div>
					</div>
				</div>
			</div>
			<div class="ibox-container">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
                        <tr>
                          <th>#</th>
                          <th>Participantes</th>
                          <th>Matricula</th>
                          <th>Nro. Aportes Cancelados</th>
                         
                          <th>Total Aportes Cancelados Bs.</th>
                          <th>Aportes por cobrar a la fecha Bs.</th>
                          <th>Total Aportes por Cobrar Bs.</th>
                          <th>Total Convalidadciones Bs.</th>
                          <th>Total Tutoria Bs.</th>
                          <th>Total Defensa Bs.</th>
                          <th>Total Extraordinarios Bs.</th>
                        </tr>
                      </thead>
						 <tbody>
                                    <?php
                                      include_once("conexion.php");
                                      $conexion = Conectar();
                                      $cont=0;
                                      $consulta="select * from usuario, matricula, programa where usuario.CI_USER = matricula.CI_USER and programa.COD_PROGRA = matricula.COD_PROGRA and programa.COD_PROGRA = '$id'";
                                      $query=mysqli_query($conexion, $consulta);
                                      $identi=0;
                                      while($dato=mysqli_fetch_array($query))
                                      {
                                        $aux=$dato['COD_SIS'];
                                        $consulta3="select COUNT(*) from recibo_ingreso where MATRICULA_IN = '$aux' and PROGRA_IN = '$id' and TIPO_IN = 'aporte'";
                                        $consulta4="select SUM(MONTO_NUM) from recibo_ingreso where MATRICULA_IN = '$aux' and PROGRA_IN = '$id' and TIPO_IN = 'aporte'";
                                        $consulta5="select SUM(MONTO_NUM) from recibo_ingreso where MATRICULA_IN = '$aux' and PROGRA_IN = '$id' and TIPO_IN = 'convalidación'";
                                        $consulta6="select SUM(MONTO_NUM) from recibo_ingreso where MATRICULA_IN = '$aux' and PROGRA_IN = '$id' and TIPO_IN = 'tutoria'";
                                        $consulta7="select SUM(MONTO_NUM) from recibo_ingreso where MATRICULA_IN = '$aux' and PROGRA_IN = '$id' and TIPO_IN = 'defensa'";
                                        $consulta8="select SUM(MONTO_NUM) from recibo_ingreso where MATRICULA_IN = '$aux' and PROGRA_IN = '$id' and TIPO_IN = 'extraordinario'";
                                        $consul="select SUM(MONTO_NUM) from recibo_ingreso where MATRICULA_IN = '$aux' and PROGRA_IN = '$id' and TIPO_IN = 'matricula'";
                                        $query3=mysqli_query($conexion, $consulta3);
                                        $dato3=mysqli_fetch_array($query3);
                                        $query4=mysqli_query($conexion, $consulta4);
                                        $dato4=mysqli_fetch_array($query4);
                                        $query5=mysqli_query($conexion, $consulta5);
                                        $dato5=mysqli_fetch_array($query5);
                                        $query6=mysqli_query($conexion, $consulta6);
                                        $dato6=mysqli_fetch_array($query6);
                                        $query7=mysqli_query($conexion, $consulta7);
                                        $dato7=mysqli_fetch_array($query7);
                                        $query8=mysqli_query($conexion, $consulta8);
                                        $dato8=mysqli_fetch_array($query8);
                                        $quer=mysqli_query($conexion, $consul);
                                        $dat=mysqli_fetch_array($quer);
                                        $aux1=$costo - $dato4['SUM(MONTO_NUM)'];
                                        $aux3 = $aux2 - $dato4['SUM(MONTO_NUM)'];
                                         $cont++;

                                        
                                        echo "
                                        <tr>
                                          <td>".$cont."</td>
                                          <td>".$dato["APE_PAT"]." ".$dato["APE_MAT"]." ".$dato["NOM_USER"]." ".$dato["OTRO_NOM"]."</td>";
                                          if ($dat["SUM(MONTO_NUM)"] != 0) 
                                          {
                                          echo "<td>".$dat["SUM(MONTO_NUM)"]."</td>"; 
                                          }else{
                                          echo "<td>0</td>";  
                                          }
                                          if ($dato3["COUNT(*)"] != 0) 
                                          {
                                          echo "<td>".$dato3["COUNT(*)"]."</td>"; 
                                          }else{
                                          echo "<td>0</td>";  
                                          }
                                         
                                          if ($dato4["SUM(MONTO_NUM)"] != 0) 
                                          {
                                          echo "<td>".$dato4["SUM(MONTO_NUM)"]."</td>"; 
                                          }else{
                                          echo "<td>0</td>";  
                                          }
                                          if ($aux3 >= 0) 
                                          {
                                          echo "<td>".$aux3."</td>"; 
                                          }else{
                                          echo "<td>0</td>";  
                                          }
                                          if ($aux1 != 0) 
                                          {
                                          echo "<td>".$aux1."</td>";  
                                          }else{
                                          echo "<td>0</td>";  
                                          }
                                          if ($dato5["SUM(MONTO_NUM)"] != 0) 
                                          {
                                          echo "<td>".$dato5["SUM(MONTO_NUM)"]."</td>"; 
                                          }else{
                                          echo "<td>0</td>";  
                                          }
                                          if ($dato6["SUM(MONTO_NUM)"] != 0) 
                                          {
                                          echo "<td>".$dato6["SUM(MONTO_NUM)"]."</td>"; 
                                          }else{
                                          echo "<td>0</td>";  
                                          }
                                          if ($dato7["SUM(MONTO_NUM)"] != 0) 
                                          {
                                          echo "<td>".$dato7["SUM(MONTO_NUM)"]."</td>"; 
                                          }else{
                                          echo "<td>0</td>";  
                                          }
                                          if ($dato8["SUM(MONTO_NUM)"] != 0) 
                                          {
                                          echo "<td>".$dato8["SUM(MONTO_NUM)"]."</td>"; 
                                          }else{
                                          echo "<td>0</td>";  
                                          }
                                        echo"</tr>";
                                        }
                                      
                                     
                                    ?>
                      </tbody>
					</table>
					<table class="table table-bordered">
						 <?php
						 $consulta9="select SUM(MONTO_NUM) from recibo_ingreso where PROGRA_IN = '$id' and TIPO_IN = 'aporte'"; 
                                        $query9=mysqli_query($conexion, $consulta9);
                                        $dato9=mysqli_fetch_array($query9);
                                        $consulta10="select SUM(MONTO_NUM) from recibo_ingreso where PROGRA_IN = '$id' and TIPO_IN = 'convalidación'"; 
                                        $query10=mysqli_query($conexion, $consulta10);
                                        $dato10=mysqli_fetch_array($query10);
                                        $consulta11="select SUM(MONTO_NUM) from recibo_ingreso where PROGRA_IN = '$id' and TIPO_IN = 'matricula'"; 
                                        $query11=mysqli_query($conexion, $consulta11);
                                        $dato11=mysqli_fetch_array($query11);
                                        $consulta12="select SUM(MONTO_NUM) from recibo_ingreso where PROGRA_IN = '$id' and TIPO_IN = 'tutoria'"; 
                                        $query12=mysqli_query($conexion, $consulta12);
                                        $dato12=mysqli_fetch_array($query12);
                                        $consulta13="select SUM(MONTO_NUM) from recibo_ingreso where PROGRA_IN = '$id' and TIPO_IN = 'defensa'"; 
                                        $query13=mysqli_query($conexion, $consulta13);
                                        $dato13=mysqli_fetch_array($query13);
                                        $consulta14="select SUM(MONTO_NUM) from recibo_ingreso where PROGRA_IN = '$id' and TIPO_IN = 'extraordinario'"; 
                                        $query14=mysqli_query($conexion, $consulta14);
                                        $dato14=mysqli_fetch_array($query14);
                                         $consulta15="select SUM(MONTO_NUM) from recibo_ingreso where PROGRA_IN = '$id'"; 
                                        $query15=mysqli_query($conexion, $consulta15);
                                        $dato15=mysqli_fetch_array($query15);
                                         ?>
									<thead>
										<tr>
											
											<th colspan="3">
												TOTAL MATRICULA EN BS.
											</th>
											<th colspan="3">
												TOTAL APORTES CANCELADO EN BS.
											</th>
											
											<th colspan="3">
												TOTAL PAGO CONVALIDACIONES BS.
											</th>
											<th colspan="3">
												APORTE POR TUTORÍA EN Bs. 
											</th>
											<th colspan="3">
												APORTE POR DEFENSA EN Bs.
											</th>
											<th colspan="3">
												APORTES EXTRAORDINARIOS EN Bs.
											</th>
											<th colspan="3">
												TOTAL PROGRAMA EN BS.
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											
											<td colspan="3">
												<div class="text-center">
													
													<?php if ($dato11["SUM(MONTO_NUM)"] != 0): ?>
														<p><?php echo $dato11["SUM(MONTO_NUM)"];?></p>
														<?php else: echo 0;?>	
													<?php endif ?>
												</div>
											</td>
											<td colspan="3">
												<div class="text-center">
													<?php if ($dato9["SUM(MONTO_NUM)"] != 0): ?>
														<p><?php echo $dato9["SUM(MONTO_NUM)"];?></p>
														<?php else: echo 0;?>	
													<?php endif ?>
													
												</div>
											</td>
											
											<td colspan="3">
												<div class="text-center">
													<?php if ($dato10["SUM(MONTO_NUM)"] != 0): ?>
														<p><?php echo $dato10["SUM(MONTO_NUM)"];?></p>
														<?php else: echo 0;?>	
													<?php endif ?>
													
												</div>
											</td>
											<td colspan="3">
												<div class="text-center">
													<?php if ($dato12["SUM(MONTO_NUM)"] != 0): ?>
														<p><?php echo $dato12["SUM(MONTO_NUM)"];?></p>
														<?php else: echo 0;?>	
													<?php endif ?>
													
												</div>
											</td>
											<td colspan="3">
												<div class="text-center">
													<?php if ($dato13["SUM(MONTO_NUM)"] != 0): ?>
														<p><?php echo $dato13["SUM(MONTO_NUM)"];?></p>
														<?php else: echo 0;?>	
													<?php endif ?>
													
												</div>
											</td>
											<td colspan="3">
												<div class="text-center">
												<?php if ($dato14["SUM(MONTO_NUM)"] != 0): ?>
														<p><?php echo $dato14["SUM(MONTO_NUM)"];?></p>
														<?php else: echo 0;?>	
													<?php endif ?>
												
													
												</div>
											</td>
											<td colspan="3">
												<div class="text-center">
													<?php if ($dato15["SUM(MONTO_NUM)"] != 0): ?>
														<p><?php echo $dato15["SUM(MONTO_NUM)"];?></p>
														<?php else: echo 0;?>	
													<?php endif ?>
													
												</div>
											</td>
										</tr>
									</tbody>
								</table>
				</div>
			</div>
			<div class="ibox-footer">
				<div class="text-center">
			            <img src="images/icons/osstf.png" width="140" alt="">
			            <img src="images/icons/bctf.png" width="50" alt="">
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