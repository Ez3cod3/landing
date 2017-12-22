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
  <body>
    <header class="site-header">
      <div class="site-header-top">
        <div class="container">
          <nav class="navigation">
            <div class="row">
              <div class="col-sm-4 col-md-4">
                <input class="menu-trigger-input" type="checkbox" id="menu-trigger"><a class="site-logo" href="index.php" title="Funde | FDE"><img src="images/icons/logo funde.jpg" width="auto" alt="Logo Funde | FDE"></a>
              </div>
              <div class="col-xs-12 col-sm-8 col-md-8">
                <h1 class="font-bold text-center letter letter_style-h1">SISTEMA DE GESTIÓN ACADEMICA FUNDE </h1>
                <h3 class="font-bold text-center letter letter_style-h3">FUNDACIÓN PARA EL DESARROLLO DE LA EDUCACIÓN </h3>
                <h3 class="text-center letter letter_style-h3--small">Foundation for Development and Education </h3>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <div class="container">
      <div id="wrapped">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0;">
          <div class="navbar-header"><a class="navbar-brand" href="index.php"><i class="fa fa-th-large"> FUNDE | FDE</i></a></div>
          <ul class="nav navbar-top-links navbar-right list_ul">
            <li class="dropdown"><a class="dropdown-toggle count-info" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-clock-o"></i><b class="caret"></b></a>
              <ul class="dropdown-menu dropdown-user animated fadeInRight m-t-xs">
                <li><a href="#"><i class="fa fa-clock-o" id="liveclock"></i><font class="clock">Hora: </font></a></li>
                <li><a href="#"><i class="fa fa-calendar"></i></a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle count-info" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope fa-fw"><span class="label label-warning">5</span></i></a>
              <ul class="dropdown-menu dropdown-messages animated fadeInRight m-t-xs">
                <li>
                  <div class="dropdown-messages-box"></div>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle count-info" href="#" data-toogle="dropdown" aria-expanded="false"><i class="fa fa-bell"> </i><span class="label label-primary">8</span></a>
              <ul class="dropdown-menu dropdown-alerts animated fadeInRight m-t-xs">
                <li><a href="#">
                    <div><i class="fa fa-envelope fa-fw">Tienes 16 mensajes</i><span class="pull-right text-muted small">4 minutos atras</span></div></a></li>
                <li class="divider"></li>
                <li><a href="#">
                    <div><i class="fa fa-twitter fa-fw">3 nuevos seguidores</i><span class="pull-right text-muted small">12 minutos atras</span></div></a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-upload fa-fw">Servicio Rebotado</i><span class="pull-right text-muted small">4 minutos atras</span></a></li>
                <li class="divider"></li>
                <li>
                  <div class="text-center link-block"><a href="#"><strong>Ver todas la notificaciones</strong></a><i class="fa fa-angle-right"></i></div>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-o"> Admin</i><b class="caret"></b></a>
              <ul class="dropdown-menu animated fadeInRight m-t-xs">
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Notificaciones</a></li>
                <li class="divider"></li>
                <li><a href="login.php"> <i class="fa fa-sing-out"> Salir</i></a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <div class="navbar-default navbar-static-side" role="navigation">
          <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
              <li class="nav-header menu">
                <div class="dropdown profile-element"><span>MENU</span></div>
              </li>
              <li><a href=""><i class="fa fa-gears"> </i><span class="nav-label"> Configurar Menu  </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" style="height: 0px;">
                  <li class="active"><a href="listado-funciones.php"><i class="fa fa-code-fork"></i>Listado de funciones</a></li>
                  <li><a href="listado-formularios.php"><i class="fa fa-list-ul"></i>Listado de formularios</a></li>
                  <li><a href="listado-form-fun.php"><i></i>Asignar formulario</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-list-ul"> </i><span class="nav-label"> Configurar Roles  </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" style="height: 0px;">
                  <li class="active"><a href="list-rol.php"><i class="fa fa-code-fork"></i>Lista de roles</a></li>
                  <li><a href="asignar-rol.php"><i class="fa fa-list-ul"></i>Asignar rol</a></li>
                  <li><a href="asignar-fun.php"><i></i>Asignar función</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-address-card"> </i><span class="nav-labelGestor"> Plantel Administrativo  </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" style="height: 0px;">
                  <li class="active"><a href="plantel-admin.php"><i class="fa fa-code-fork"></i>Lista plantel administrativo</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-institution"> </i><span class="nav-label"> Gestión Academica</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" style="height: 0px;">
                  <li class="active"><a href="lista-programas.php"><i class="fa fa-code-fork"></i>Lista de Programas</a></li>
                  <li><a href="lista-modulo.php"><i class="fa fa-list-ul"></i>Lista de módulos</a></li>
                  <li><a href="lista-unidades.php"><i></i>Lista de unidades</a></li>
                  <li><a href="lista-asistencia.php"><i class="fa fa-list-ul"></i>Lista de asistencia</a></li>
                  <li><a href="aporte-grupo.php"><i class="fa fa-list-ul"></i>Aportes por grupo</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-graduation-cap"> </i><span class="nav-label"> Gestor Participantes</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" style="height: 0px;">
                  <li class="active"><a href="participantes.php"><i class="fa fa-code-fork"></i>Lista de Participantes</a></li>
                  <li><a href="kardex.php"><i class="fa fa-list-ul"></i>Kardex</a></li>
                  <li><a href="notas-asistencia.php"><i class="fa fa-list-ul"></i>Notas y Asitenci</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-group"></i><span class="nav-label">Gestor Docentes</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" style="height: 0px;">
                  <li class="active"><a href="lista-participantes.php"><i class="fa fa-code-fork"></i>Lista Participantes</a></li>
                  <li><a href="control-asistencia.php"><i class="fa fa-list-ul"></i>Control asistencia</a></li>
                  <li><a href="lista-calificaciones.php"><i></i>Calificaciones</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-credit-card"></i><span class="nav-label">Gestor de Cobros</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" style="height: 0px;">
                  <li class="active"><a href="registro-cobro.php"><i class="fa fa-code-fork"></i>Registros de Cobro</a></li>
                  <li><a href="regitro-aportes.php"><i class="fa fa-list-ul"></i>Aportes por cobrar</a></li>
                  <li><a href="aporte-grupo.php"><i class="fa fa-list-ul"></i>Aportes por grupo</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-money"></i><span class="nav-label">Gestor Contable</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" style="height: 0px;">
                  <li class="active"><a href="recibos-egresos.php"><i class="fa fa-code-fork"></i>Recibos Egresos</a></li>
                  <li><a href="recibos-ingresos.php"><i class="fa fa-list-ul"></i>Recibos Ingresos</a></li>
                  <li><a href="caja-chica.php"><i></i>Caja</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="wrapped">
        <div class="gray-bg" id="page-wrapper" style="min-height:182px;">
          <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
              <h2>Lista del plantel administrativo de la fundación</h2>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Lista del plantel administrativo</a></li>
              </ol>
            </div>
            <div class="col-lg-2"></div>
          </div>
          <div class="wrapper wrapper-content fadeInRight">
            <div class="row">
              <div class="col-lg-12">
                <div class="ibox float-e-margins">
                  <div class="ibox-title">
                    <h5> <i class="fa fa-briefcase"></i>Lista del plantel administrativo</h5>
                  </div>
                </div>
                <div class="ibox-content">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Código</th>
                          <th>Apellido Paterno</th>
                          <th>Apellido Materno</th>
                          <th>Nombre usuario</th>
                          <th>Habilitar</th>
                          <th>Información usuario</th>
                          <th>Editar</th>
                          <th>Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>79870765</td>
                          <td>Tomas </td>
                          <td>Aquino</td>
                          <td>Melgar</td>
                          <td> 
                            <div class="text-center">
                              <label>
                                <input class="i-checks" type="checkbox">
                              </label>
                            </div>
                          </td>
                          <td> 
                            <div class="text-center"><a class="btn-w-m" href="#informacion-usuario" data-toggle="modal" width="50px"><i class="fa fa-file"></i></a></div>
                          </td>
                          <td>
                            <div class="text-center"><a class="btn-w-m" href="#editar-datos" data-toggle="modal" width="50px"><i class="fa fa-edit"></i></a></div>
                          </td>
                          <td>
                            <div class="text-center"><a href="#"><i class="fa fa-times"></i></a></div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="control-group">
                      <div class="controls margin_bottom text-center margin_bottom"><a class="btn btn-success btn-w-m button" data-toggle="modal" href="#nuevo-registro"><i class="fa fa-user-plus margin"></i>Nuevo Usuario</a><a class="btn btn-info btn-w-m button" href="#" data-toggle="modal"><i class="fa fa-check margin"></i>Guardar Cambios</a><a class="btn btn-danger btn-w-m" href="#" data-toggle="modal"><i class="fa fa-undo"></i>Restablecer</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="wrapper wrapper-content fadeInRight">
            <div class="row">
              <div class="col-lg-12">
                <div class="ibox float-e-margins">
                  <div class="ibox-title">
                    <h5> <i class="fa fa-briefcase"></i> Lista del plantel administrativo deshabilitado</h5>
                  </div>
                </div>
                <div class="ibox-content">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Codigo</th>
                          <th>Nombre Completo</th>
                          <th>Habilitar</th>
                          <th>Información</th>
                          <th>Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>79870765</td>
                          <td>Lopez Trigo Isabel</td>
                          <td>
                            <div class="text-center">
                              <label>
                                <input class="i-checks" type="checkbox">
                              </label>
                            </div>
                          </td>
                          <td> 
                            <div class="text-center"><a href="#informacion-usuario" data-toggle="modal"><span class="fa fa-file"></span></a></div>
                          </td>
                          <td>
                            <div class="text-center"><a href="#"><span class="fa fa-times"></span></a></div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="control-group">
                      <div class="controls text-center margin_bottom"><a class="btn btn-info btn-w-m button" href="#" data-toggle="modal"><i class="fa fa-check margin"></i>Guardar Cambios</a><a class="btn btn-danger btn-w m" href="#" data-toggle="modal"><i class="fa fa-undo margin"></i>Restablecer</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal inmodal" id="nuevo-registro" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
              <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><i class="fa fa-user-plus modal-icon"></i>
                <h4 class="modal-title">Editar datos de Usuario</h4><small class="font-bold">Llene correctamente todos los datos personales del usuario</small>
              </div>
              <div class="modal-body">
                <div class="text-center">
                  <h3 class="m-t-none m-b">|  Datos Personales</h3>
                </div>
                <form class="form-signin" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Apellido Paterno</label>
                    <input class="form-control" placeholder="Ingrese apellido paterno" type="text">
                  </div>
                  <div class="form-group">
                    <label>Apellido Materno</label>
                    <input class="form-control" placeholder="Ingrese apellido materno" type="text">
                  </div>
                  <div class="form-group">
                    <label>Nombre Completo</label>
                    <input class="form-control" placeholder="Ingrese nombre completo" type="text">
                  </div>
                  <div class="form-group">
                    <label>Fecha Nacimiento y edad</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-7">
                        <div class="input-group date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          <input class="form-control" type="text" value="03/04/2014">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-5">
                        <input class="form-control" placeholder="Edad" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Número de CI y lugar de Expedición</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6">
                        <input class="form-control" placeholder="Numero de CI" type="text">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6">
                        <select class="chosen-select" data-placeholder="Escoge un Departamento" tabindex="2">
                          <option value="">Select</option>
                          <option value="Cochabamba">Cochabamba</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Sexo</label>
                    <div class="form-inline">
                      <label>
                        <input class="i-checks margin" type="checkbox">Mujer
                      </label>
                      <label>
                        <input class="i-checks margin" type="checkbox">Hombre
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Teléfono Fijo y Celular</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6">
                        <input class="form-control" placeholder="Número de celular" type="text">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6">
                        <input class="form-control" placeholder="Numero de telefono fijo" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control" placeholder="Ingrese e-mail" type="mail">
                  </div>
                </form>
                <div class="text-center">
                  <h3 class="m-t-none m-b">| Datos Profesionales</h3>
                </div>
                <form class="form-singin" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Grado Académico y Profesión</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Grado académico" type="text">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Profesión" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Lugar de trabajo y cargo actual</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Lugar de trabajo" type="text">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Cargo" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Antigüedad y teléfono de oficina</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Antigüedad" type="text">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Telefono de oficina" type="text">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <div class="text-center">
                  <button class="btn btn-success">Guardar Datos</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal inmodal" id="editar-datos" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
              <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><i class="fa fa-user-plus modal-icon"></i>
                <h4 class="modal-title">Editar datos de Usuario</h4><small class="font-bold">Llene correctamente todos los datos personales del usuario</small>
              </div>
              <div class="modal-body">
                <div class="text-center">
                  <h3 class="m-t-none m-b">|  Datos Personales</h3>
                </div>
                <form class="form-signin" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Apellido Paterno</label>
                    <input class="form-control" placeholder="Ingrese apellido paterno" type="text">
                  </div>
                  <div class="form-group">
                    <label>Apellido Materno</label>
                    <input class="form-control" placeholder="Ingrese apellido materno" type="text">
                  </div>
                  <div class="form-group">
                    <label>Nombre Completo</label>
                    <input class="form-control" placeholder="Ingrese nombre completo" type="text">
                  </div>
                  <div class="form-group">
                    <label>Fecha Nacimiento y edad</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-7">
                        <input class="form-control" type="text" value="03/04/2014">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-5">
                        <input class="form-control" placeholder="Edad" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Número de CI y lugar de Expedición</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6">
                        <input class="form-control" placeholder="Numero de CI" type="text">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6">
                        <select class="chosen-select" data-placeholder="Escoge un Departamento" tabindex="2">
                          <option value="">Selecionar</option>
                          <option value="Cochabamba">Cochabamba</option>
                          <option value="La Paz">La Paz</option>
                          <option value="Santa Cruz">Santa Cruz</option>
                          <option value="Potosí">Potosí</option>
                          <option value="Oruro">Oruro</option>
                          <option value="Sucre">Sucre</option>
                          <option value="Beni">Beni</option>
                          <option value="Pando">Pando</option>
                          <option value="Tarija">Tarija</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Sexo</label>
                    <div class="form-inline">
                      <label>
                        <input class="i-checks margin-left" type="checkbox">Mujer
                      </label>
                      <label>
                        <input class="i-checks margin-left" type="checkbox">Hombre
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Teléfono Fijo y Celular</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6">
                        <input class="form-control" placeholder="Número de celular" type="text">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6">
                        <input class="form-control" placeholder="Numero de telefono fijo" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control" placeholder="Ingrese e-mail" type="mail">
                  </div>
                </form>
                <div class="text-center">
                  <h3 class="m-t-none m-b">| Datos Profesionales</h3>
                </div>
                <form class="form-singin" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Grado Académico y Profesión</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Grado académico" type="text">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Profesión" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Lugar de trabajo y cargo actual</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Lugar de trabajo" type="text">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Cargo" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Antigüedad y teléfono de oficina</label>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Antigüedad" type="text">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input class="form-control" placeholder="Telefono de oficina" type="text">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <div class="text-center">
                  <button class="btn btn-success">Guardar Datos</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal inmodal" id="informacion-usuario" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
              <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><i class="fa fa-user-plus modal-icon"></i>
                <h4 class="modal-title">Información Usuario</h4>
              </div>
              <div class="modal-body">
                <div class="text-center">
                  <h3 class="m-t-none m-b">| Datos Personales</h3><small></small>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <td colspan="12">
                              <h3 class="m-t-none m-b">I Datos Personales</h3>
                            </td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="6">
                              <p> <b style="font-weight: bold;">Apellido Paterno:</b></p>
                            </td>
                            <td colspan="6">
                              <div class="text-center">
                                <p>Lopez</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="6">
                              <p> <b style="font-weight: bold;">Apellido Materno:</b></p>
                            </td>
                            <td colspan="6">
                              <div class="text-center">
                                <p>Trigo</p>
                              </div>
                            </td>
                          </tr>
                          <tr> 
                            <td colspan="6">
                              <p><b style="font-weight: bold;">Nombre:</b></p>
                            </td>
                            <td colspan="6">
                              <div class="text-center">
                                <p> Isabel</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">
                              <p><b style="font-weight: bold;">Edad:</b></p>
                            </td>
                            <td colspan="2">
                              <div class="text-center">
                                <p>26</p>
                              </div>
                            </td>
                            <td colspan="2">
                              <p><b style="font-weight: bold;">Sexo:</b></p>
                            </td>
                            <td colspan="2">
                              <div class="text-center">
                                <p>Femenino</p>
                              </div>
                            </td>
                            <td colspan="2">
                              <p><b style="font-weight: bold;">Estado Civil:</b></p>
                            </td>
                            <td colspan="2">
                              <div class="text-center">
                                <p>Soltera</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="3">
                              <p><b style="font-weight: bold;">C.I./Pasaporte:</b></p>
                            </td>
                            <td colspan="3">
                              <div class="text-center">
                                <p>123456</p>
                              </div>
                            </td>
                            <td colspan="3">
                              <p><b style="font-weight: bold;">Expedido:</b></p>
                            </td>
                            <td colspan="3">
                              <div class="text-center">
                                <p>cercado</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="3">
                              <p><b style="font-weight: bold;">Nacionalidad:</b></p>
                            </td>
                            <td colspan="3">
                              <div class="text-center">
                                <p>Boliviana</p>
                              </div>
                            </td>
                            <td colspan="3">
                              <p><b style="font-weight: bold;">Lugar de Nacimiento:</b></p>
                            </td>
                            <td colspan="3">
                              <div class="text-center">
                                <p>Sucre</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="6">
                              <p><b style="font-weight: bold;">Fecha Nacimiento:</b></p>
                            </td>
                            <td colspan="6">
                              <div class="text-center">
                                <p>45/765/1234</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="3">
                              <p><b style="font-weight: bold;">Teléfono fijo:</b></p>
                            </td>
                            <td colspan="3">
                              <div class="text-center">
                                <p>-</p>
                              </div>
                            </td>
                            <td colspan="3">
                              <p><b style="font-weight: bold;">Celular:</b></p>
                            </td>
                            <td colspan="3">
                              <div class="text-center">
                                <p>9876545678</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="6">
                              <p><b style="font-weight: bold;">Correo Electrónico:</b></p>
                            </td>
                            <td colspan="6">
                              <div class="text-center">
                                <p>margarit@gmail.com</p>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                        <thead>
                          <tr>
                            <td colspan="12">
                              <h3 class="m-t-none m-b">II Datos Personales</h3>
                            </td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="3">
                              <p><b style="font-weight: bold;">Grado Académico:</b></p>
                            </td>
                            <td colspan="3">
                              <div class="text-center">
                                <p>Licenciatura</p>
                              </div>
                            </td>
                            <td colspan="3">
                              <p><b style="font-weight: bold;">Profesión:</b></p>
                            </td>
                            <td colspan="3">
                              <div class="text-center">
                                <p>Sociología</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="3">
                              <p><b style="font-weight: bold;">Lugar de trabajo Actual:</b></p>
                            </td>
                            <td colspan="3">
                              <div class="text-center">
                                <p>Funde</p>
                              </div>
                            </td>
                            <td colspan="3">
                              <p><b style="font-weight: bold;">Cargo Actual:</b></p>
                            </td>
                            <td colspan="3">
                              <div class="text-center">
                                <p>NN</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="3">
                              <p><b style="font-weight: bold;">Antigüedad:</b></p>
                            </td>
                            <td colspan="3">
                              <div class="text-center">
                                <p>0</p>
                              </div>
                            </td>
                            <td colspan="3">
                              <p><b style="font-weight: bold;">Teléfono Oficina:</b></p>
                            </td>
                            <td colspan="3">
                              <div class="text-center">
                                <p>0</p>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
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