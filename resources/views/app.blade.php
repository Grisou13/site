<!DOCTYPE html>
<html lang="{{Lang::getLocale()}}">
	<head >
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
		<title>thomas-ricci.io</title>
		<style type="text/css">
			.hero{
				color:#9d9ddd;
				height: 100vh;
				background-size: cover;
			  background-position: center;
			  background-image: url('img/hero-2.jpg');
				margin-bottom: 50px;

				display: flex;
				flex-direction: column;
        
				justify-content: center;
				align-items: center;
				text-align: center;
        
        /* Internet Explorer 10 */
        display:-ms-flexbox;
        -ms-flex-pack:center;
        -ms-flex-align:center;       
        /* Safari, Opera, and Chrome */
        display:-webkit-box;
        -webkit-box-pack:center;
        -webkit-box-align:center;
        /* W3C */
        box-pack:center;
        box-align:center;
			}
			#main-nav-container{
				margin-bottom:0px;
			}
			body {
			  position: relative;
			  background-color:#D6D6D6;
			}
			.footer{
				padding: 20px 20px;
				background-color: #444;
				color:#fff;
				margin-top:20px;

			}
			.footer a{
				color:#000;
			}
			#top-link-block.affix-top {
			    position: absolute; /* allows it to "slide" up into view */
			    bottom: -82px; /* negative of the offset - height of link element */
			    left: 10px; /* padding from the left side of the window */
			}
			#top-link-block.affix {
			    position: fixed; /* keeps it on the bottom once in view */
			    bottom: 18px; /* height of link element */
			    left: 10px; /* padding from the left side of the window */
			}
			.content .row{
				margin-top:20px;
				margin-bottom: 10px;
			}
			img.align-center{
				display: block;
			    margin-left: auto;
			    margin-right: auto;
			}
      .sidebar.affix-top{
        position: absolute; /* allows it to "slide" up into view */
       
      }
      .sidebar.affix{
        position:fixed;
        top:53px;
      }
      .sidebar{
        max-width: 200px;
        background-color:#f5f5f5;
        border-right: 1px solid #eee;
        overflow-x: hidden;
        overflow-y: auto;
      }
      .sidebar-right.affix-top{
        right:-250px;
      }
      .sidebar-left.affix-top{
        left:-250px;
      }
      .sidebar-right{
        float:right;
        right:2px;
      }
      .sidebar-left{
        float:left;
        left:2px;
      }
      @media (max-width:600px){
        .sidebar{
          display:none;
        }
      }
		</style>
	</head>
	<body data-spy="scroll" data-target="#navbar-example">
		<nav class="navbar navbar-inverse navbar-fixed-top" id="main-nav-container">
			<div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">thomas-ricci.io</a>
			    </div>
			    <div class="collapse navbar-collapse" id="main-nav">
			    	<ul class="nav navbar-nav">
			    		<li>
			    			<a href="{{url('/')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Acceuil <span class="caret"></span></a>
				    		<ul class="dropdown-menu" role="menu">
					            <li><a href="acceuil-formation" id="acceuil-formation">Formation</a></li>
					            <li><a href="#" id="acceuil-projets">Projets</a></li>
					            
				          	</ul>
              </li>
			          	<li><a href="{{url('projects')}}">Projets</a></li>
			          	<li><a href="{{url('contact')}}">Me contacter</a></li>
                  <li>{!! Form::open(['route'=>'lang.selector']) !!}
                    {!! Form::token() !!}
                    {!! Form::select('lang',[
                      "en"=>trans('app.form.lang.en'),
                      "fr"=>trans('app.form.lang.fr')
                    ]) !!}
                    {!! Form::close() !!}</li>
                @section('main-navigation')
			    	</ul>
			    </div>
			</div>
		</nav>
		<a name="top"></a>
    
    
    <div class="page-content">
      @section('hero')
      <!-- HERO -->
      <div class="hero">
        <div class="row">
          <div class="col-sm-4 col-xs-8">
            <h1 class="text-center">Le développement Web fait facilement</h1>
            <p class="lead"></p>
          </div>
        </div>
      </div> <!-- /HERO -->    
      @show
      <!-- SIDEBAR -->
      <div>
        <div class="sidebar-left sidebar hidden">
          @section('sidebar')
          @show
        </div>
        <div class="sidebar-right sidebar hidden">
          @section('sidebar-right')
          <ul class="nav nav-sidebar">
            <li><a href="#">Reports</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Reports</a></li>
          </ul>
          @show
        </div>
      </div><!-- /SIDEBAR -->
     
      @section('content')
      <!-- CONTENT -->
      <div class="container" >
        <!-- DESCRIPTION -->
        <div class="row">
          <div class="col-md-4" >
            <img src="https://www.carlton.srsd119.ca/wordpress/wp-content/uploads/2014/02/Categories-applications-education-university-icon.png" width="150" class="img img-circle align-center">
            <h1 class="text-center"><a name="acceuil-formation" data-target="#acceuil-formation">Formation</a></h1>
            <p>Je suis actuellement étudiant au CPNV à Sainte-Croix, en Informaticien CFC</p>
            <p>Je suis passioné par le développement web depuis quelque temps eta i envie de rendre le web plus facile et accessible au personne qui n'en ont pas les moyens ni le temps</p>
          </div>
          <div class="col-md-4">
            <img src="http://agence-tasch.com/wp-content/uploads/design/icones/site-optimise-seo.png" width="150" class="img img-circle align-center">
            <h1 class="text-center">Travail personnel</h1>
            <p>Je suis actuellement en stage chez Kudelski NagraVision, et dans l'équipe de développement et maintenance Web</p>
          </div>
          <div class="col-md-4">
            <img src="http://portal.securecodewarrior.com/img/code-icon.png" width="150" class="img img-circle align-center">
            <h1 class="text-center">Technique</h1>
            <p>Je suis très ouvert sur toute les différentes technologie qui existe et qui peuvent simplifié l'utilisation du web, uatant pour les developpeurs que les utilisateurs</p>
          </div>
        </div><!-- /DESCRIPTION -->

        <!-- PROJECTS -->
        <div data-target="#acceuil-projets" class="center-block content">
          <h1 class="text-center">Mes derniers projets</h1>
          <p class="lead text-center">La plupart de mes projets sont en cours de développement, voir même certain au stade d'idée, visitez la page concernant mes projets pour plus de détail</p>
          <div class="row">
            <div class="col-sm-6 hidden-xs">
              <img class="img img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRYOLejfp1a13Q2e94C4YxwgmurqfE1LSTlMa_1cxETx4kIqmJ">
            </div>
            <div class="col-sm-6">
              <h1>QuadriPi</h1>
              <p>Un quadri-copter fait grâce à un Raspberry PI et un Arduino.</p>
              <p>Le but ultime de ce projet est d'avoir un drone pilotable grâce a une télécommande et aussi un joystick. Le drone aura une caméra et potentiellement un système de vue immersive</p>
              <a href="{{url('projects/raspi-drone')}}" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <h1>Meet and Create</h1>
              <p>Un site de partage de projets. Il a été réalisé dans le cadre de ma formation au CPNV en groupe. Nous avons voulu le continuer avec un des membre du projet pour permettre de faire des focntionnalité plus avancés </p>
              <a href="{{url('projects/mac')}}" class="btn btn-primary">En savoir plus</a>
            </div>
            <div class="col-sm-6 hidden-xs">
              <img class="img img-responsive" src="img/project-sharing.png">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 hidden-xs">
              <img src="http://cdn2.hubspot.net/hub/189007/file-515211463-jpg/Cloud-Comput.jpg" class="img img-responsive">
            </div>
            <div class="col-sm-6 pull-right">
              <h1>Load Balancer</h1>
              <p>Un site permettant de crée des répartisseur de charges logique. Tout se fait de manière automatisé par une interface WEB.</p>
              <p>Le but final de ce projet et de pouvoir déployer une application sur un tas de serveur redondant sans avoir besoins de s'en occuper.</p>
              <p>Le load balancing est la base d'un cloud.</p>
              <a href="{{url('projects/mac')}}" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
        </div>
        <!-- /PROJECTS -->
        <!-- BLOG -->
        <div id="acceuil-blog">
          <h1 class="text-center">Mes derniers posts de blogs</h1>
        </div><!-- /BLOG -->

      </div><!-- /CONTENT --> 
      @show
    </div>
		
		<span id="top-link-block" class="hidden">
		    <a href="#top" class="well well-sm"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
		        <i class="glyphicon glyphicon-chevron-up"></i>
		    </a>
		</span><!-- /top-link-block -->
		<footer class="footer">			
			<div class="container">
				<div class="row">
					<div class="col-xs-4 text-left">
						<p>&copy; Copyright Thomas Ricci</p>
						<p>Ce site web est possible grâce à Laravel, et Twitter Bootrap</p>
					</div>
					<div class="col-xs-4 text-center">
						<ul class="list-unstyled">
							<li><a href="{{url('projects')}}">Mes projets</a></li>
							<li><a href="{{url('blog')}}">Mon blog</a></li>
							<li><a href="https://github.com/Grisou13"><i class="fa fa-github"></i> Mon github</a></li>
						</ul>
					</div>
					<div class="col-xs-4 text-right">
						<p><a href="{{url('contact')}}">Me contacter</a></p>
					</div>
				</div>
			</div>
		</footer>
		
	    <script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    @yield('scripts')
	    <script type="text/javascript">
	    	if ( ($(window).height() + 100) < $(document).height() ) {
			    $('#top-link-block').removeClass('hidden').affix({
			        // how far to scroll down before link "slides" into view
			        offset: {top:function(){return $('.hero').height()-100} }
			    });
          $('.sidebar').removeClass('hidden').affix({
			        // how far to scroll down before link "slides" into view
			        offset: {top:function(){return $('.hero').height()-100} }
			    });
			}
	    </script>
	    <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-61090245-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</body>
</html>
