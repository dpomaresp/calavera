<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link href="../css/sticky-footer-navbar.css" rel="stylesheet">
  <link href="../js/jplayer-dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
	<title>Calavera Beats - Home</title>
</head>
<body cz-shortcut-listen="true">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="row">        
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
              <li class="active"><a disabled>Home</a></li>
              <li><a href="<?php echo URL::to('/beats'); ?>">Beats</a></li>
              <li> <a href="<?php echo URL::to('/contact'); ?>">Contacto</a> </li>
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
            <a title="Español" class="lang-flag lang-selected" href="/language.php?lang=es/"><img class="flag-image" src="../images/flags/es.png" /></a>
            <a title="English" class="lang-flag" href="/language.php?lang=en/"><img class="flag-image" src="../images/flags/us.png" /></a>
          </div><!--/.nav-collapse -->
        
        </div>
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Sticky footer with fixed navbar</h1>
      </div>
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
              <p> Si deseas recibir información por correo electrónico de los últimos beats o cualquiera otra novedad, puedes inscribirte aquí. </p>
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
    <script type="text/javascript" src="../js/jplayer-dist/jplayer/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="../js/jplayer-dist/add-on/jplayer.playlist.min.js"></script>
    <script>
      $(document).ready(function(){

        // Flag behaviour on click simulation
        $('.lang-flag').on('click', function(e){
          e.preventDefault();
          $('.lang-flag').removeClass('lang-selected');
          $(this).addClass('lang-selected');
        });


        // jplayer code
        var myPlaylist = new jPlayerPlaylist({
          jPlayer: "#jquery_jplayer_N",
          cssSelectorAncestor: "#jp_container_N"
        }, [
          // {
          //   title:"Your Face",
          //   artist:"The Stark Palace",
          //   mp3:"http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",
          //   oga:"http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg",
          //   poster: "../images/Calavera Beats Final.jpg"
          // }
        ], {
          playlistOptions: {
            enableRemoveControls: true,
            autoPlay: false
          },
          swfPath: "../../js/jplayer-dist/jplayer",
          supplied: "webmv, ogv, m4v, oga, mp3",
          useStateClassSkin: true,
          autoBlur: false,
          smoothPlayBar: true,
          keyEnabled: true
        });

        
        
          myPlaylist.setPlaylist([
          {
            title:"Your Face",
            artist:"The Stark Palace",
            mp3:"http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",
            poster: "../images/Calavera Beats Final.jpg"
          },
          {
            title:"Hidden",
            artist:"Miaow",
            mp3:"http://www.jplayer.org/audio/mp3/Miaow-02-Hidden.mp3",
            poster: "http://www.jplayer.org/audio/poster/Miaow_640x360.png"
          },
          {
            title:"Cyber Sonnet",
            artist:"The Stark Palace",
            mp3:"http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3",
            poster: "http://www.jplayer.org/audio/poster/The_Stark_Palace_640x360.png"
          },
          {
            title:"Tempered Song",
            artist:"Miaow",
            mp3:"http://www.jplayer.org/audio/mp3/Miaow-01-Tempered-song.mp3",
            poster: "http://www.jplayer.org/audio/poster/Miaow_640x360.png"
          },
          {
            title:"Lentement",
            artist:"Miaow",
            mp3:"http://www.jplayer.org/audio/mp3/Miaow-03-Lentement.mp3",
            poster: "http://www.jplayer.org/audio/poster/Miaow_640x360.png"
          }]);
      });
    
    </script>
</body>
</html>
