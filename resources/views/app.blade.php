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
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet" >
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
			body,html {
			  position: relative;
			  background-color:#D6D6D6;

			}
      .hidden{
        display:none;
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
       display:none;
      }
      .sidebar-right.affix-top{
        right:-250px;
        
      }
      .sidebar-left.affix-top{
        left:-250px;
        
      }
      .sidebar.affix{
        position:fixed;
        top:53px;
        display:block;
      }
      .sidebar{
        max-width: 200px;
        background-color:#f5f5f5;
        border-right: 1px solid #eee;
        overflow-x: hidden;
        overflow-y: hidden;
        position:absolute;
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
      .contact input{
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background: none repeat scroll 0 center rgba(0, 0, 0, 0);
        border-color: -moz-use-text-color -moz-use-text-color #ffffff;
        border-image: none;
        border-style: none none solid;
        border-width: 0 0 1px;
        color: #000;
        font-size: 12px;
        font-style: italic;
        font-weight: 400;
        letter-spacing: 1px;
        margin: 0 0 5px;
        outline: 0 none;
        padding: 5px 10px;
        width: 100%;
      }
      .contact textarea {
        margin-top: 10px;
        margin-left: 50px;
        width: 500px;
        height: 100px;
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background: none repeat scroll 0 0 rgba(0, 0, 0, 0.07);
        border-color: -moz-use-text-color #FFFFFF #FFFFFF -moz-use-text-color;
        border-image: none;
        border-radius: 6px 6px 6px 6px;
        border-style: none solid solid none;
        border-width: medium 1px 1px medium;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12) inset;
        color: #555555;
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 1em;
        line-height: 1.4em;
        padding: 5px 8px;
        transition: background-color 0.2s ease 0s;
      }
      .contact textarea:focus {
        background: none repeat scroll 0 0 #FFFFFF;
        outline-width: 0;
      } 
      #main-nav-container{
        border-radius: 0 !important;
        -moz-border-radius: 0 !important;
        -webkit-border-radius: 0 !important;
        -ms-border-radius:0 !important;
        -o-border-radius:0 !important
      }
      #main-nav-container.affix-top{
        position:fixed;
        top:-100px;
      }
      #main-nav-container.affix{
        position:fixed;
      }
		</style>
	</head>
  
  
  
	<body>
		<nav class="navbar navbar-default hidden" id="main-nav-container">
			<div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="{{url('/')}}">thomas-ricci.io</a>
			    </div>
			    <div class="collapse navbar-collapse" id="main-nav">
			    	<ul class="nav navbar-nav">
			    		<li>
			    			<a href="{{url('/')}}" class="dropdown-toggle" data-toggle="dropdown" role="anchor" aria-expanded="false">Acceuil <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
					            <li><a href="#acceuil-formation">Formation</a></li>
					            <li><a href="#">Projets</a></li>
					            
                  </ul>
              </li>
			          	<li><a href="{{route('projet.index')}}">Projets</a></li>
			          	<li><a href="{{action('ContactController@getIndex')}}">Me contacter</a></li>
                  <li>
                    {!! Form::open(['route'=>'lang.selector',"class"=>"navbar-form"]) !!}
                    {!! Form::select('lang',[
                      "en"=>trans('app.form.lang.en'),
                      "fr"=>trans('app.form.lang.fr')
                    ]) !!}
                    {!! Form::close() !!}
                  </li>
                @section('main-navigation')
			    	</ul>
			    </div>
			</div>
		</nav>
		<a name="top"></a>
     @if(!empty($errors)&& count($errors))
    <div class="alert alert-warning alert-dismissible" role="alert">
      <ul>
        @foreach ($errors->all('<li>:message</li>') as $message)
            {!! $message !!}
        @endforeach
      </ul>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="page-content">
     
      @yield('hero')
      <!-- SIDEBAR -->
      <div class="sidebar-container">
        <div class="sidebar-left sidebar hidden">
          @yield('sidebar-left')
        </div>
        <div class="sidebar-right sidebar hidden">
          @yield('sidebar-right')
          <ul class='navbar'>
            <li>
              akfsjshdf
            </li>
          </ul>
        </div>
      </div><!-- /SIDEBAR -->
      <!-- CONTENT -->
      <div class="container" >
        @yield('content')      
      </div><!-- /CONTENT --> 
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
							<li><a href="{{route('projet.index')}}">Mes projets</a></li>
							<li><a href="{{route('blog.index')}}">Mon blog</a></li>
							<li><a href="https://github.com/Grisou13"><i class="fa fa-github"></i> Mon github</a></li>
						</ul>
					</div>
					<div class="col-xs-4 text-right">
						<p><a href="{{action('ContactController@getIndex')}}">Me contacter</a></p>
					</div>
				</div>
			</div>
		</footer>
		
	    <script src="{{asset('js/jquery.min.js')}}"></script>
	    <script src="{{asset('js/bootstrap.min.js')}}"></script>
	    @yield('scripts')
	    <script type="text/javascript">
       
       /*affix elements*/
	    	if ( ($(window).height() + 100) < $(document).height() ) {
			    $('#top-link-block').removeClass('hidden').affix({
			        // how far to scroll down before link "slides" into view
			        offset: {
                top:function(){
                  return $('.hero').length ? $('.hero').height()-100 : 0
                }
              }
			    });
          
          $('.sidebar').removeClass('hidden').affix({
			        // how far to scroll down before link "slides" into view
			        offset: {
                top:function(){
                  return $('.hero').length ? $('.hero').height()-100 : -5
                }
              }
			    });
        }
         $('#main-nav-container').removeClass('hidden'); //always remove hiddens
          //VARS
          var minOpacity=0.1 ,
              animationTime=200//in ms
              ;
          //FUNCs
          var progressiveOpacity=function(element,binder,animate){ //element to animate, binder:element to whatch, animate:true/false
              if(!$(binder).length){//set opacity to max if there is no binder to the element
                $(element).stop().animate({"opacity":"1"},animationTime);
                $(element).css("color","#000");
                return false;
              }
              var fadeStart=$(binder).position().top // start scroll, opacity 0
                  ,fadeUntil=$(binder).height()+$(binder).position().top // end scroll opacity 1
                  ,fading = $(element)
                  ,color=rgbToHex(0,0,0)
              ;

              
              var offset = $(window).scrollTop()
                  ,opacity=0.1//basic opacity
              ;
              if( offset>=fadeUntil ){//if we are past element make opac
                  opacity=1;
              }else if( offset>=fadeStart && offset <fadeUntil ){//if we are in element
                  var newOpacity=offset/fadeUntil;
                  if(newOpacity>minOpacity)
                    opacity=newOpacity;
              }

              if(animate!==undefined && animate!==null && animate)
                $(fading).stop().animate({'opacity':opacity},animationTime);//apply opacity
              else
                $(fading).css('opacity',opacity);
              return true;
              
          };
          if($('.hero').length ){//animate only if there is a hero
            if($(window).scrollTop() <= $(".hero").height())//change opacity only if we are on top of the hero
               progressiveOpacity($("#main-nav-container"),$(".hero"));
            $('#main-nav-container').addClass("navbar-fixed-top");
          }
          
          if($(window).scrollTop()!==0)//add fixed top if we are in middle of the page
            $('#main-nav-container').addClass("navbar-fixed-top");
          
          $(window).scroll(function(e){
            var scrollTop = $(window).scrollTop();
            
            if(scrollTop !== 0){//scrolling              

              progressiveOpacity($("#main-nav-container"),$(".hero"));
              
              if(!$('.hero').length)//add fixed if there is no hero and we are in middle of the page
                $('#main-nav-container').addClass("navbar-fixed-top");
            }
            else	{//on top of the window
              
              if($('.hero').length && scrollTop !== $('.hero').outerHeight()){                
                   progressiveOpacity($("#main-nav-container"),$(".hero"));
               }
              if(!$('.hero').length)//remove fixed if we are on top of page and there is no hero
                $('#main-nav-container').removeClass("navbar-fixed-top");
            }
          });

          $('#main-nav-container').hover(
            function (e) {//On mouse In
              
              if($('#main-nav-container').css('opacity')<1){//change Opacity only if it less than maximum
                 progressiveOpacity($("#main-nav-container"),null,true);
              }
            },
            function (e) {//On mouse Out
                                                            /*&& $('.hero').length && $(window).scrollTop() <= $('.hero').height()*/
               if(!$('.hero').length)//do not animate if there is no hero
                 return false;
               if($('#main-nav-container').css('opacity')>minOpacity){                 
                 progressiveOpacity($("#main-nav-container"),$(".hero"),true);
              }
            }
          );
          
          
          /*$('#main-nav-container')
              .removeClass('hidden') //always remove class on page load and add affix         
              .affix({
                  // how far to scroll down before link "slides" into view
                  offset: {
                    top:function(){
                      return $('.hero').length ? $('.hero').height()-100 : -5
                    }               
                  }
              })
              .on('affixed.bs.affix',function(e){
                $(this).removeClass("animated fadeOutUp affix");
                $(this).addClass("navbar-fixed-top");                
                $(this).addClass("animated fadeInDown");                
                return false;
              });
          if($('.hero').length){//animate and every thing only if we have a hero
            $('#main-nav-container')
              .on('affixed-top.bs.affix',function(e){
                $(this).removeClass("animated fadeInDown");
                $(this).addClass('animated fadeOutUp');
                return false;
              })
              .on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(e){
                $(this).removeClass("animated");
                return false;
              });
          }*/
          
			
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
