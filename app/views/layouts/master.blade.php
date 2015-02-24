<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		
		@section('styleSheets')
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link href="../css/sticky-footer-navbar.css" rel="stylesheet">
		
		@show

		@yield('pageTitle')

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
	              @yield('navbarElements')
	            </ul>
	            <a title="Español" class="lang-flag lang-selected" href="/language.php?lang=es/"><img class="flag-image" src="../images/flags/es.png" /></a>
	            <a title="English" class="lang-flag" href="/language.php?lang=en/"><img class="flag-image" src="../images/flags/us.png" /></a>
	          </div><!--/.nav-collapse -->
	        
	        </div>
	      </div>
	    </nav>
	</head>
	<body cz-shortcut-listen="true">
    	@yield('content')

    	@include('../includes/subscription')

    	@include('../includes/footer')

	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    @section('jsLibraries')
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <script src="../js/bootstrap.min.js"></script>
	    
	    @show

	    @section('jsCode')
	    	<script>
		    	$(document).ready(function(){
			      // Flag behaviour on click simulation
			      $('.lang-flag').on('click', function(e){
			        e.preventDefault();
			        $('.lang-flag').removeClass('lang-selected');
			        $(this).addClass('lang-selected');
			      });
				});
	    	</script>
	    @show
	    
    </body>


</html>