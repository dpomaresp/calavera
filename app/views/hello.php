<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link href="../css/sticky-footer-navbar.css" rel="stylesheet">
	<title>Calavera Beats</title>
</head>
<body cz-shortcut-listen="true">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="row-fluid">        
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../images/calavera-title.png" /></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#beats">Beats</a></li>
              <li><a href="#contact">Contacto</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <a href="/language.php?lang=es/"><img class="flag-image" src="../images/flags/es.png" /></a>
            <a href="/language.php?lang=en/"><img class="flag-image" src="../images/flags/us.png" /></a>
          </div><!--/.nav-collapse -->
        
        </div>
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Sticky footer with fixed navbar</h1>
      </div>
      <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
      <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
    </div>

    <!-- Modal subscribe form -->
    <div id="subscribe-modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Formulario de subscripción</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <p> Si deseas recibir información por correo electrónico de los últimos beats o cualquiera otra novedad, puedes inscribirte aquí </p>
              <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-md-4 col-xs-6">
            <button id="subscribe-btn" type="button" class="btn btn-default" data-toggle="modal" data-target="#subscribe-modal">
              <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Subscríbete
            </button>
          </div>
          <div class="col-xl-4 col-md-4 col-xs-6">
            <div class="social">
              <a class="facebook" href="http://www.facebook.com/calaverabeats" target="_blank"><img title="Facebook" src="../images/Icons 32/facebook.png"/></a>
              <a class="twitter" href="http://www.twitter.com/calaverabeats" target="_blank"><img title="Twitter" src="../images/Icons 32/twitter.png"/></a>
              <a class="youtube" href="http://www.youtube.com/calaverabeats" target="_blank"><img title="YouTube" src="../images/Icons 32/youtube-2.png"/></a>
              <a class="soundcloud" href="http://www.soundcloud.com/calavera-beats" target="_blank"><img title="SoundCloud" src="../images/Icons 32/soundcloud.png"/></a>
              <a class="envato" href="http://www.audiojungle.net/user/calaverabeats" target="_blank"><img title="Envato" src="../images/Icons 32/envato.png"/></a>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 col-xs-12">
            <p class="footer-text">Copyright &copy; 2015</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
