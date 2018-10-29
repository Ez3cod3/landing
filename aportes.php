<!DOCTYPE html>
<script>
  function PopupCenter(pageURL, title,w,h) {
    var left = (screen.width/2)-(w/2);
    var top = (screen.height/2)-(h/2);
    var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
  }
</script>
<?php
   include_once("conexion.php");
    $conexion = Conectar();
    $id = $_POST['id'];
    $num = $_POST['numero'];
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
    <script language="javascript"> 
function imprimir()
{ if ((navigator.appName == "Netscape")) { window.print() ; 
} 
else
{ var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>'; 
document.body.insertAdjacentHTML('beforeEnd', WebBrowser); WebBrowser1.ExecWB(6, -1); WebBrowser1.outerHTML = "";
}
}
</script>
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
        </div>
      </div>
    </header>
    <div class="container">
      <div id="wrapped">
       
        <?php include "menu.php"; ?>
        
       
      </div>
    </div>
    <div class="container">
      <div class="wrapped">
        <div class="gray-bg" id="page-wrapper" style="min-height:182px;">
          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
              <h2>Lista de Aportes por grupo</h2>
              <ol class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li><a href="aporte-grupo.php">Lista Grupos</a></li>
                <li><a href="#">Lista Aportes</a></li>
              </ol>
            </div>
            <div class="col-lg-2"></div>
          </div>
          <div class="wrapper wrapper-content fadeInRight">
            <div class="row">
              <div class="col-lg-12">
                <div class="ibox float-e-margins">
                  <div class="ibox-title">
                    <h5> <i class="fa fa-briefcase"></i> Lista de Aportes</h5>
                  </div>
                  <div class="ibox-header">
                  <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                      <div class="text-center">
                        <input class="menu-trigger-input" type="checkbox" id="menu-trigger"><img src="images/icons/logo funde.jpg" width="160" alt="Logo Funde | FDE">
                      </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                      <p><strong>FUNDACIÓN PARA EL DESARROLLO Y LA EDUCACIÓN - FUNDE</strong></p>
                      <p><strong><?php echo $dato["NOM_PROGRA"]?></strong></p>
                      <p><strong><?php echo $dato["COD_PROGRA"]?></strong></p>
                      <p><strong>COSTO PROGRAMA: <?php echo $dato["COSTO"]?> Bs.</strong></p>
                      <p><strong>Nro DE APORTES: <?php echo $dato["APORTES"]?></strong></p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="ibox-content">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="dataTables-example">
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
                                       //$consulta9="select SUM(MONTO_NUM) from recibo_ingreso where PROGRA_IN = '$id' and TIPO_IN = 'aporte'"; 
                                        //$query9=mysqli_query($conexion, $consulta9);
                                        //$dato9=mysqli_fetch_array($query9);
                                        //$consulta10="select SUM(MONTO_NUM) from recibo_ingreso where PROGRA_IN = '$id' and TIPO_IN = 'convalidación'"; 
                                        //$query10=mysqli_query($conexion, $consulta10);
                                        //$dato10=mysqli_fetch_array($query10);
                                        //$consulta11="select SUM(MONTO_NUM) from recibo_ingreso where PROGRA_IN = '$id' and TIPO_IN = 'matricula'"; 
                                        //$query11=mysqli_query($conexion, $consulta11);
                                        //$dato11=mysqli_fetch_array($query11);
                                        //$consulta12="select SUM(MONTO_NUM) from recibo_ingreso where PROGRA_IN = '$id' and TIPO_IN = 'tutoria'"; 
                                        //$query12=mysqli_query($conexion, $consulta12);
                                        //$dato12=mysqli_fetch_array($query12);
                                        //$consulta13="select SUM(MONTO_NUM) from recibo_ingreso where PROGRA_IN = '$id' and TIPO_IN = 'defensa'"; 
                                        //$query13=mysqli_query($conexion, $consulta13);
                                        //$dato13=mysqli_fetch_array($query13);
                                        //$consulta14="select SUM(MONTO_NUM) from recibo_ingreso where PROGRA_IN = '$id' and TIPO_IN = 'extraordinario'"; 
                                        //$query14=mysqli_query($conexion, $consulta14);
                                        //$dato14=mysqli_fetch_array($query14);
                                         //$consulta15="select SUM(MONTO_NUM) from recibo_ingreso where PROGRA_IN = '$id'"; 
                                       // $query15=mysqli_query($conexion, $consulta15);
                                        //$dato15=mysqli_fetch_array($query15);
                                      //echo "<tr>
                                      ////<td>Total Programa:".$dato15["SUM(MONTO_NUM)"]."</td>
                                      
                                      //<td>Total Matriculas : ".$dato11["SUM(MONTO_NUM)"]."</td>
                                      


                                      //<td>Total Aportes : ".$dato9["SUM(MONTO_NUM)"]."</td>
                                      
                                      //<td>Total Convalidaciones : ".$dato10["SUM(MONTO_NUM)"]."</td>
                                      //<td>Total Tutorias : ".$dato12["SUM(MONTO_NUM)"]."</td>
                                      //<td>Total Defensas : ".$dato13["SUM(MONTO_NUM)"]."</td>
                                      //<td>Total Extraordinarios : ".$dato14["SUM(MONTO_NUM)"]."</td>
                                      //<td></td>
                                      //<td></td>
                                      

                                      
                                      //</tr>";
                                    ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="ibox-footer">
                <div class="text-center">
                  <a href="javascript:PopupCenter('imprimir_aporte_grupo.php?id=<?php echo $id?>&num=<?php echo $num?>','IMPRIMIR DOCENTE',600,500)") class="btn btn-success btn-w-m"><span class="fa fa-print margin_right"></span> Imprimir</a>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal inmodal" id="info-aporte" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
              <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><i class="fa fa-newspaper-o modal-icon"></i>
                <h4 class="modal-title">Informe Aporte</h4><small class="font-bold"> </small>
              </div>
              <div class="modal-body">
                <div class="text-center">
                  <h3 class="m-t-none m-b">|  Datos informe aporte </h3>
                </div>
                <form class="form-signin" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Programa</label>
                    <input class="form-control" placeholder="Ingrese nuevo programa" type="text">
                  </div>
                  <div class="form-group">
                    <label>Descripción</label>
                    <input class="form-control" placeholder="Ingrese una descripción sobre el programa" type="text">
                  </div>
                  <div class="form-group">
                    <label>Versión y costo </label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <select class="chosen-select" data-placeholder="Escoge una versión" tabindex="2">
                          <option value="">Versión</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Costo del programa" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Número de cuentas y sesiones</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Número cuentas" type="text">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Número sesiones" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Fecha y año de inicio y finalización</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          <input class="form-control" type="text" value="03/04/2014">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <input class="form-control" placeholder="Año inicio" type="text">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <input class="form-control" placeholder="Año fin" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Departamento y Localidad</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <select class="chosen-select" data-placeholder="Selecionar departamento" tabindex="2">
                          <option value="">Seleccionar</option>
                          <option value="Cochabamba">Cochabamba</option>
                          <option value="La Paz">La Paz</option>
                          <option value="Santa Cruz">Santa Cruz</option>
                        </select>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <select class="chosen-select" data-placeholder="Selecionar departamento" tabindex="2">
                          <option value="">Seleccionar</option>
                          <option value="Cochabamba">Cercado</option>
                          <option value="La Paz">El Alto</option>
                          <option value="Santa Cruz">Santa Cruz de la sierra</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <div class="text-center">
                  <button class="btn btn-primary">Ingresar Datos</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal inmodal" id="nuevo-programa" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
              <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><i class="fa fa-newspaper-o modal-icon"></i>
                <h4 class="modal-title">Nuevo Aporte</h4><small class="font-bold">Llene correctamente todos los datos del programa</small>
              </div>
              <div class="modal-body">
                <div class="text-center">
                  <h3 class="m-t-none m-b">|  Datos del programa</h3>
                </div>
                <form class="form-signin" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Programa</label>
                    <input class="form-control" placeholder="Ingrese nuevo programa" type="text">
                  </div>
                  <div class="form-group">
                    <label>Descripción</label>
                    <input class="form-control" placeholder="Ingrese una descripción sobre el programa" type="text">
                  </div>
                  <div class="form-group">
                    <label>Versión y costo </label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <select class="chosen-select" data-placeholder="Escoge una versión" tabindex="2">
                          <option value="">Versión</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Costo del programa" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Número de cuentas y sesiones</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Número cuentas" type="text">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Número sesiones" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Fecha y año de inicio y finalización</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          <input class="form-control" type="text" value="03/04/2014">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <input class="form-control" placeholder="Año inicio" type="text">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <input class="form-control" placeholder="Año fin" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Departamento y Localidad</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <select class="chosen-select" data-placeholder="Selecionar departamento" tabindex="2">
                          <option value="">Seleccionar</option>
                          <option value="Cochabamba">Cochabamba</option>
                          <option value="La Paz">La Paz</option>
                          <option value="Santa Cruz">Santa Cruz</option>
                        </select>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <select class="chosen-select" data-placeholder="Selecionar departamento" tabindex="2">
                          <option value="">Seleccionar</option>
                          <option value="Cochabamba">Cercado</option>
                          <option value="La Paz">El Alto</option>
                          <option value="Santa Cruz">Santa Cruz de la sierra</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <div class="text-center">
                  <button class="btn btn-primary">Ingresar Datos  </button>
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
    <style>
      *{
        line-height: 60%;
        font-size:12;
      }
      block scriptsBody
    </style>
  </body>
</html>