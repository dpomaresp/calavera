@extends('layouts/master')


@section('styleSheets')
  @parent
  <link href="../js/jplayer-dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
@stop

@section('pageTitle')
	<title>Calavera Beats - Beats</title>
@stop 


@section('navbarElements')
  <li><a href="{{ URL::to('/'); }}">Home</a></li>
  <li class="active"><a disabled>Beats</a></li>
  <li> <a href="{{ URL::to('/contact'); }}">Contacto</a> </li>
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
@stop

@section('content')
  <!-- Begin page content -->
  <div class="container">
    <div class="page-header">
      <h1>Lista de beats</h1>
    </div>
    
    <div id="player" style="margin: 15px; ">
      <div id="jp_container_N" class="jp-video jp-video-270p" style="width: 320px;" role="application" aria-label="media player">
        <div class="jp-type-playlist">
          <div id="jquery_jplayer_N" class="jp-jplayer" style="display:none"></div>
          <div class="jp-gui">
            <!-- <div class="jp-video-play">
              <button class="jp-video-play-icon" role="button" tabindex="0">play</button>
            </div> -->
            <div class="jp-interface">
              <div class="jp-progress">
                <div class="jp-seek-bar">
                  <div class="jp-play-bar"></div> 
                </div>
              </div>
              <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
              <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
              <div class="jp-controls-holder">
                <div class="jp-controls">
                  <button class="jp-previous" role="button" tabindex="0" title="Anterior">Anterior</button>
                  <button class="jp-play" role="button" tabindex="0" title="Play">Play</button> 
                  <button class="jp-next" role="button" tabindex="0" title="Siguiente">Siguiente</button>
                  <button class="jp-stop" role="button" tabindex="0" title="Stop">Stop</button>
                </div>
                <div class="jp-volume-controls">
                  <button class="jp-mute" role="button" tabindex="0" title="Silenciar">Silenciar</button>
                  <button class="jp-volume-max" role="button" tabindex="0" title="Max volumen">Max volumen</button>
                  <div class="jp-volume-bar">
                    <div class="jp-volume-bar-value"></div>
                  </div>
                </div>
              </div>
              <div class="jp-details">
                <div class="jp-title" aria-label="title">&nbsp;</div>
              </div>
            </div>
          </div>
          <div class="jp-playlist">
            <ul>
              <li>&nbsp;</li>
            </ul>
          </div>
          <div class="jp-no-solution">
            <span>Update Required</span>
            To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
          </div>
        </div>
      </div>
    </div>

    <div style="margin: 15px; ">
      <div style="width:300px; height:450px; overflow:hidden;">
        <center>
            <div>
              <embed src="http://www.soundclick.com/widgets/creatives/mp3PlayerPremium.swf" width="300" height="430" flashvars="bandid=996361&ext=1" name="MP3PlayerPremium" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </div>
            <div style="width: 300px; position: relative; top: -390px;">
              <a href="http://www.soundclick.com/bands/default.cfm?bandID=996361">
                <img src="http://www.soundclick.com/images/navigation/blank1x1.gif" border="0" width="300" height="250">
              </a> 
            </div>
        </center>
      </div>
    </div>
  </div>
@stop

@section('jsLibraries')
  @parent
  <script type="text/javascript" src="../js/jplayer-dist/jplayer/jquery.jplayer.min.js"></script>
  <script type="text/javascript" src="../js/jplayer-dist/add-on/jplayer.playlist.min.js"></script>
@stop


@section('jsCode')
  @parent
  <script>
    $(document).ready(function(){
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
@stop
      
</body>
</html>