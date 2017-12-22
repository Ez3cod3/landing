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
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/stylus.css" rel="stylesheet">
    <link href="css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
  </head>
  <body>
    <div class="loginColumns animated fadeInDown">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
          <div class="formulario">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <label class="site-logo site-logo_image full-width text-center" title="Funde | FDE"><img src="images/icons/logo funde.jpg" width="auto" alt="Logo Funde | FDE"></label>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <h1 class="letter letter_style-h3">Bienvenidos a FUNDE | FDE</h1>
                <h3 class="font-bold text-center letter letter_style-h1">FUNDACIÓN PARA EL DESARROLLO Y LA EDUCACIÓN</h3>
                <h3 class="letter letter_style-h1">Foundation for Development and Education</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 margin-box">
          <div class="ibox-content">
            <form class="m-t formulario" role="form" action="login.php">
              <div class="form-group middle-box text-center">
                <h3 class="font-bold identification">IDENTIFICARSE</h3>
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Ingrese su matricula" name="cod_reg">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Ingrese su C.I." name="ci_user">
              </div>
              <div class="text-center">
                <button class="btn button" type="submit">Ingresar</button>
                <p class="text-muted text-center margin-bottom"><small>Registrarse</small></p><a class="btn btn-w-m btn-danger margin-top" href="registrar.php">Crear registro nuevo</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="site-footer">
      <div class="container content">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h4 class="site-footer_title">Dirección:</h4>
            <p>Calle Falsuri #229</p>
            <p>entre Colombia y Ecuador</p>
            <p class="font-bold">¿QUIERES CONTACTARTE CON UN REPRESENTANTE?</p><a class="tel tel_big" href="tel:4661417"> Contactanos al: 4661417</a><a class="tel" href="tel:79797291">desde celular 79797291 ó 79959059</a>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h4 class="site-footer_title">Nuestras Páginas</h4>
            <ul class="site-footer_menu">
              <li><a href="#">fundefde@supernet.com.bo</a></li>
              <li><a href="#">escformsind@supernet.com.bo</a></li>
              <li><a href="#">fundefde.bo@gmail.com</a></li>
              <li><a href="#">www.funde-efs.org</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h4 class="site-footer_title">Nuestros Auspicidores</h4>
            <ul class="social-aus">
              <li><a href="#"><img class="social-aus_thick" src="images/icons/osstf.png" alt="Osstf"></a></li>
              <li><a href="#"><img class="social-aus_icon" src="images/icons/bctf.png" alt="Blue"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script><!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(document).ready(function(){
      	$('.i-checks').iCheck({
      		checkboxClass: 'icheckbox_square-green',
      		radioClass: 'iradio_square-green',
      	});
      });
    </script>
  </body>
</html>