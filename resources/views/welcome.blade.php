<html>
	<head>
		
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
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
			}
			#main-nav-container{
				margin-bottom:0px;
			}
			body {
			  position: relative;
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
					            <li><a href="#" id="acceuil-formation">Formation</a></li>
					            <li><a href="#" id="acceuil-projets">Projets</a></li>
					            
				          	</ul>
			          	</li>
			          	<li><a href="{{url('projects')}}">Projets</a></li>
			          	<li><a href="{{url('contact')}}">Me contacter</a></li>
			    	</ul>
			    </div>
			</div>
		</nav>
		<a name="top"></a>
		<div class="hero">
			<div class="row">
				<div class="col-sm-4 col-xs-8">
					<h1 class="text-center">Le développement Web fait facilement</h1>
					<p class="lead"></p>
				</div>
			</div>
			
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4" data-target="#acceuil-formation">
					<h1 class="text-center">Formation</h1>
					<p>Je suis actuellement étudiant au CPNV à Sainte-Croix, en Informaticien CFC</p>
					<p>Je suis passioné par le développement web depuis quelque temps eta i envie de rendre le web plus facile et accessible au personne qui n'en ont pas les moyens ni le temps</p>
				</div>
				<div class="col-md-4">
					<h1 class="text-center">Travail personnel</h1>
					<p>Je suis actuellement en stage chez Kudelski NagraVision, et dans l'équipe de développement et maintenance Web</p>
				</div>
				<div class="col-md-4">
					<h1 class="text-center">Technique</h1>
					<p>Je suis très ouvert sur toute les différentes technologie qui existe et qui peuvent simplifié l'utilisation du web, uatant pour les developpeurs que les utilisateurs</p>
				</div>
			</div>
			<h1 class="text-center">Mes derniers projets</h1>
			<p class="lead text-center">La plupart de mes projets sont en cours de développement, voir même certain au stade d'idée, visitez la page concernant mes projets pour plus de détail</p>
			<div data-target="#acceuil-projets" class="center-block content">
				
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
						<img class="img img-responsive" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQEBIQEBQQEBARFRAPDxAVDw8RFBAQFREWFxUUExQYHCggGBslGxYUIjEhMSkrLi4uFyAzODUsNygtLiwBCgoKDg0OGxAQGy8mICUsNyw3LzIsLDYsNzc4NC8vLCwsNywsLDQsNC4sLC0sLC8tLDQsLCwsLC0wLCwsLCwsLP/AABEIAKwBJAMBEQACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAAAwQCBQYBB//EADoQAAIBAgQDBQYFAwMFAAAAAAECAAMRBAUSITFBUQYTImFxMoGRobHBFCNCUnIHktFiguEVY6LS8f/EABsBAQACAwEBAAAAAAAAAAAAAAAEBQIDBgEH/8QANBEBAAIBAgMFBgUEAwEAAAAAAAECAwQRBSExEkFRYXEGE4GRwdEUMqGx8CJCUvEVI2IH/9oADAMBAAIRAxEAPwD7jAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQECvTq62YA2CnT6kcYHmKrd2NXEcx5eUCwpuLjgdxA9gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgctiMwOFrOj7BmZ6bcmVjfbzF7QIMXnBrEUqXjqPsoH1PQDrA62hT0qq8dIC362FoGcBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQNT2jzH8PS1+ZJ3t4QCT9oHPYvuq6+JfVWG4PO45GBLlGEWgdVEinfZuB1DzvA6nB4rXcG2oAE24EG9j8jAswEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQECKvV026sbAQMtJtxN/dAiw2J1EofaXf1HWBYgICAgc12wpmp3dPkxVD/AL6gX6AwNN2q/KxbAGwqKtW3nup+a398DTYnGuxSkrEGq9OlcHhrcAn4GB2PZxBTxNakPZXvAovfwrU8PyMDpoCAgICAgICAgICAgICAgICAgICAgICAgICBqs+qGmEq/pQkP5Bv1HyuB8YEP/W108RArZFjRVxLsDsEKD/UxINh6AfOB0kBAQOdz3tUmGqd0Eaq4sW8QRVuLgXsbm3lK/U8Qrht2IjeVfqdfXDbsRG8qODzpMbisOFVlKlndTY20KxBBHEXZZv0uprnr2ojbZv02prnr2ojbZzf9QKzvjyFO1OnTpn13aw/umvVa2mHlHO386sNTrKYeUc5/nVpcrVziaF97VaVj0OscZ5p9djy/wBM8p/nR5g12PLynlP86PpuQIHr1qw4aqgv11Pt/wCKg/7hJya6GAgICAgICAgICAgICAgICAgICAgICAgICAgYVioU6rabHVfcW57QODx2UozMwDUlO4RWIUD05QKiZgKFbDhdlR9RA/bazfImB9JDAi43B3HpAXgeaoHx3t1WxIzSulJSykUWBYeEXooCdXqDKPX0x+9mbKXXUx+8mbGHqvTbUjFH0lSymx0m1wD02EraZr0iYpMxurKZr0iYpMxujK334k8TNe7Ddz+Kz/Q7KoHhJXe97g290l1029d0ymm3rEzL69kWb4fDUMPRqNpqVKVKszaTpBqLcXbl09AJdzrMWOYpeee0fyVzOrxY7RS889odOGkxLZXgewEDBqoBtxPQQPDVA43HrAkgICAgICAgICAgICAgICAgICAgIFTM6oRAW3XUob7fO0Dhcz7QrUqVKagjRtvz2gS9m8qTF0q5Y2dXp909r6KiqxvbmCGsR0gb/I80KscLXGiqmyi+zdNJ5g8vhAnx+epTJVRrYbHkoPS/OVOq4vjwzNaR2pj5fP7JuHQ3vHatyj9XP5rmuJqIdDlCN9KbFhzF+N5T24rqMk7TO0eT3XcOm2nmMEzFuvr5fFy1yxuSWJ63JJmqZ75cFFb2v2duczt57+Cw+AqAX0+oBBPwmuMtZnZa24Fra07fZj035/z4qwmanUsVlNCq2p0BbmdwT624zbXNesbRLbTPkpG0Sus1hudgALk8FAsBvyAAEwta153nnLCZte3PnMul7E9q6TuMGzhmteg3I2409XPqPf5S94dlyRHu8nw+32dboeG8Qx6ecmfFMUjpM9fl129YdwHlqzSBoGQMDWZZiwxYniWa/lY2tAsY7ELoMD3KqxeijHncetiR9oFuAgICAgICAgICAgICAgICAgICBQztb0H8tLfBgYHybOr0atRzsCb/ACgbX+nWcmlTxJdWOtqb0hyJsQQTy4LIWr12PTRz5z4fzok6fS3zTy5R4tjmuKfEXqMFDUlZ10ix0ixZb8TtcjzHnIOg4lfNn7F9oiY5eqVqtHTFj3rvu4rLM5xD4ru1LPeodYJLAIX3JPLbe8ia7T0rN7W5dW7T5pmtYh24Eo0xF+ETVrt4r358etusy7dttkO2g09s0Z5rHajv+vmpvmux0rY8NzwPmOs2xh8ZUuo9o647WpXHPaiduc/u1qrYAdNpvmXHWtNrTaes80AxtLXoDKW4WBvv0vM/dX7Pa25J3/Fa38POq91b3cf3bcvXzjzjk1ecZdXqEsGDKN1S5Fh6cCZK0+bHSNpjn4us9meOcJ0OOtcuOa5J632iY+8Rt3RHru51HZWDKSrKQykGxUg3BHnLF9Sns3r4xPyfVez39SqBo2xmpKyD2gjMtYgcRp9ljz5ecmU1Mbf1dXF632dzVyb6fnWfPnHz6/u4XE9s8waqaoxFZDclUVrIovsNHskeokb3t5nfd0NOE6OmPse7ifPv+fV9k7GZ7+NwlKqSpqkEVQv7gxBIHna/vlhjmZrEy4LXYqYdRemOd4iVTtBQfDv3tI3FUnVS4ENxLLyt9zM0VrKGIr4iolI3pByFLEgm3+kdYHd0KKoqoosqgKo8gIEkBAQEBAQEBAQEBAQEBAQEBAQPCYEVSxBB3B2I6iBwvaJ9FdaBRKlNqlFaevc0y7LpIbjsT58IGjpY4UXajUAApsyXAHhsSOA4icfqsMzltPfvLocN493X0blQCLjcHcHrK6W3dkiAcAB6ACJtM9WO0Qxr10pjU7Kg6kgTZg0+XPfsYqzafCI3lhkyUxx2rztDzC4ynVv3bq9uNjw9RNmq0Wp0sxGfHNd/GP2Y4s+PLG9LRPojxeCV7t7Lfu/9pppkmvJA4hwrBq43tyt/lH18XDZ7mbXNOn7HA1B+v+J5D6zpo4PqMGOubPSYiefp6+E+U/u1+y3BNDkzzbUXre9Z5U7p/wDXP83pG8R37tHh6xRg68VNxPb1i0bS+ka3SY9Xp76fJ+W0bcurc1O0bafCgDdb3A87SFGijfnPJwWP/wCf1jL/ANmfenhFdp9N95iPXZoWMnQ+hUpWlYpXpEbMZ69lr8fhmJ1Jvfit/pNtLR0lT6/S5LTOTHz8vt9n17sJ2VxSYZFcrQUqraw4qMxP7Qptbzv7pPr0hwWeZnJaZ8XWYbKdIfU7VNBtqb0B90yalPK2D46kF3CB2PuQgfMiB20BAQEBAQEBAQEBAQEBAQEBAQECNjAhdoHH9r0/NpP0akf7KoP3gU88yujXrvUOpSfD4SFvba524zktfru1mmKViNp23759V1psU1pG89VSpmFDDFKBJFlFuLaVJ2LH4yBGLJlibpG8RybJSCARuDuD1E0SyaHtJldWqyvT8YC6dFwCDe9xfr9p2nsnxrR6CuTHqP6ZtO/a237uk7c/OPVTcV0ebPNbY+e3d9Wky7EHDV9Tq11DKy3AO4/+TseLaSvGeH9nTXrO8xMT3cp5+cd8foqNLlnR598kT02mE2a53UrjSPy6fNQblv5H7SJwX2VwaC0Zss9vJHTlyj0jx85+EQ26zid88dmvKv6z6/ZqajADxWt5zps2THSkzlmIr59EHBiy5MkVwxM27tt9/wBGrxKqG8JuDv6HpOB4th0lMsW0tomJ6xE7xH+/Du9H1L2f1GvyYrU1tJia7bWmNpn18Zjx7/VFKp0CLE1dCluNv8z2sbzs0ajNGHHN57mvXMTfe1ps92qa8Stvz2XnYAXOw4zCFne9Yr2p6Pof9EMY7tjF1N3VMUNCFjpVnNS5A4AnT8pM09dolxHG80ZclZiPv8XYZ3iHD4mkrEB6a1AL8ypX6rJCjVexCH8Rq/7bfDwwO+BgewEBAQEBAQEBAQEBAQEBAQEDwwIXaBXqNA5Dtm+wP7VJ+f8AxA0OYZjVp1aoVvDrZluAbBvFtf1nKazT1/EW3jvXuntE4qz5NBhstq4upWrM5AGlAxUtqYbnnsBt8ZYaXSdvFy5IufP2Ltvk+afhw1LEEjT7BALXvyHUHiPfIN+FZ9RqIxYa72nu3j58278Vjpj95aeToclo18cC1L8ijuO9ZQ7t10JwHqb+ktqezWPTTH4u3at/jXlHxt1+ERHqg24nbJH/AFRtHjP0j7/Jhmv9OiFL0qzvU3J7wKdR/ktrfAzrtJxeuGtcXu4rSOURXu+apyaabzNu1vM+Lgq9JkZkcFWUlWB5ETpaXresWrO8SgTExO0qGOos1iN7bW+8oOP6DPqa0ti59nfl9YdT7L8U02iyXrn5drba3htvyn1/2iw+FJbxDYcb85UcL4Lmvni2optSO6e/y2X/ABv2j09dNNNJk3vPfHd4zv8Ap4vcXhbeJeHMdPMSVxngtaUnPp42261+sfWPl5wvZ72jyWyRptXbff8ALaeu/hPjv3T135TupsoIIO4OxE5V3dqxaJiY5Nz2cy/D45nwj0qQK0XenVpoEqI6lQLsNn9rgb+6SsMzadpchxjFh0tYvhmd5nnG+8bfHp8HP4PIsXiDoSlUJXZrgqFPMHV9J5WkzPQ1Oux0xRvbfl03fWewrrgcP+Hej3dTZndSG75jzfe9wOm3pJlaxEOXzZbZbdqy9meLDVxUIZWanoCaGF1DE6rkD909am77IYcLTNT9x0L/ABUkH53+EDolaBIDA9gICAgICAgICAgICAgICAgeNwgVahgVKzQOdzPCjEM6XsQo26jfhA4bPMvq0nDXaxsuriDbgGE13xUv+aIllW9q/lnZsctzdlUJVpmw2DIot8JnEREbQ8md+cqOf4N6mGeqqlXQ94i8+7BBIPnxNpv0cVrqqZOkxvHzj7sMtp91ar6b2Or0/wALRC2t3aW/tE8z2tbLa1uu8lIiKxENxisQoUzUyfG+2TqcWxXmq6vXf7WnV8FtP4eYnxn6fVXaqP6/g0gMt0YZgBc7Ac4mYiN5FOtmA4KL+Z2HwkW+pjpXmzijTIlWs5p01ZzcgIik7X8p88z46xmvWsd8/u+m4NbedLjtmv8A2xv8n0TsD2Zq4R2xFey1HTu1pgglVJBJY8L+EbCbMWOa85c/xLXUz7Up0jvdxZW9oA+oBm9UrNKqF2FgPLaBpc8fVXTypn5uf8QOiyBgMNS/j87m8Dao0CwkDOAgICAgICAgICAgICAgICB4/CBTqQKWIgc/j6TBhUTZ14eY5gwKOb46jUpEMrd4RbuwhJLcrHh74FfAYQhF1Dewv6wNhhqKs6qx0qdr+7hAsU8rbCKFwxJpi9qZb2QTeyHp5TK95vO89XlaxWNoV8Zi8WykKljbbU4tf3Xiu0zHa6E77cnz3M6NdKhNdWV2JNyNm/ieBnY6O+H3UVwzyj5/FV5Yv2t7dWvxGNROO56Cb8mopTqwiu71kWvTBuwB8Q5H3z2a1z0iT8str2cyDD1NRqa3ZSPBfStjwvbc8DKPiU5dNMdmeU9/elaetcm+7ssFhadIaaSJTHRVC39bcZQTzndPm0ztEz0XUaHjJqthA1uGzZHJDNZgSCnC2+0BVfXUYg3sgA+LGB0PZ+p+Sg6XHzMDe0jAtUoEsBAQEBAQEBAQEBAQEBAQEDxuECrUECpVWBQr0rwKT4cdIEL04GrzpG7ptAYtY20gk3tta0C3lOPq90grXFQKocXB8Vt+EDa4fGrzgUs8xeFxeGxNJbM9NWBtYmlU03U+R4GbsGW+K8XryYXrFqzEvkuQ9nWxQ11GamlgRYAs977i/AbSw1Gsittq85R8eGZjeUJZsPUqUL6xTdlUkWNr3H1lpodVb3UI+WkRaXS9iKrO9cngBSA6A3e/2lfxjJN5pv5/Rv0sbbuwQSlTEwECLFVAoufT3wNLmGRtW8VgDyNyCPeIGeQ4N6S1FcliDxJvtbheB1GQkhADx4/GB0VGBbpQJYCAgICAgICAgICAgICAgIHhgQOIFaosCpUWBVqJAq1EgVqiwIadG5PugRY29NGboCYGq7LYNVStUUk/iUWo4O/5gBDEf48plNpmIjweRG0rFCjpAG3LlbgLbCYvVbG5Hh67a6iAtw1AlSQOFyOM34tTkxRtWWu2Otuq9gcFTpLopqEXjYcz1J5ma8mS2S3atO8sq1isbQuokwZJlSBDjMLrUr8COR5EQKVPF4ilsyioOo2Pw4QJUxveXApuGblp+/CB0WWYfSovxsLwNvSECzTECWAgICAgICAgICAgICAgICAgROIEFRYFWosCtUSBVqJAq1FgajNa1SlZ6ZA2IIIuDbcfeBA2KerQplwCKqqTb9JZb29IHuXU9KFRcWLDbod7fOBbCQM1SBKiQJkSBOlOBIKUDIYQHlAmpYMDlAu0UtAuU1gWKcDOAgICAgICAgICAgICAgICAgYsIELrAgdYFaokCtVSBTrLA1GapqQrz5fAwNZhcSBQRSDZVC32tdNvtAuYU+JvMKfr/wAQLqrAmWnAlWnAmSnAnSnAnSnAnSnAmWnAkVIE6CBKogZQEBAQEBAQEBAQEBAQEBAQEBAjYQIXECB1gVqiwKWIWBoMVcuBy3gctjsWUBocyxt/Em5+sDosXqDKEG5FvThAs0mdCuu1m2HrA2lNIFhKcCZacCZKcCdKcCZEgSqsCQLAkUQMoCAgICAgICAgICAgICAgICAgIHhECN1gQukCvUSBTrUrwNTjMIQdSi55jqIHH43K6j4jvGGkMyqB0UHnA6asyIVdiDbl124QMaSvWfvGFh+leg8/OBuqFLaBaSlAmWnAlWnAmVIEqpAkCwMgIHsBAQEBAQEBAQEBAQEBAQEBAQEBAQPCIGDJAjanAgelAgfDXgU8RlavxECquRU1N7Enlclrel4FylhAIFtKMCVaUCVacCQJAzCQMwIHsBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEDwiBgVgYsIGBWBgVEDwKIGaiBIogZgQMhA9gICAgICAgICAgICAgICB/9k=">
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
			
		</div>
		<span id="top-link-block" class="hidden">
		    <a href="#top" class="well well-sm"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
		        <i class="glyphicon glyphicon-chevron-up"></i> Back to Top
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
							<li><a href="{{url('blog')}}">Blog</a></li>
							<li><a href="https://github.com/Grisou13"><i class="fa fa-github"></i> Mon github</a></li>
						</ul>
					</div>
					<div class="col-xs-4 text-right">
						<p><a href="{{url('contact')}}">Me contacter</a></p>
					</div>
				</div>
			</div>
		</footer>
		
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	    @yield('scripts')
	    <script type="text/javascript">
	    	if ( ($(window).height() + 100) < $(document).height() ) {
			    $('#top-link-block').removeClass('hidden').affix({
			        // how far to scroll down before link "slides" into view
			        offset: {top:100}
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
