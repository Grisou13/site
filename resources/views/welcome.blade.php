@extends('app')
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
@stop
@section('content')
<!-- DESCRIPTION -->
<div class="row">
  <div class="col-md-4" >
    <img src="https://www.carlton.srsd119.ca/wordpress/wp-content/uploads/2014/02/Categories-applications-education-university-icon.png" width="150" class="img img-circle align-center">
    <h1 class="text-center"><a name="acceuil-formation" data-target="#acceuil-formation">Formation</a></h1>
    <p>Je suis actuellement étudiant au CPNV à Sainte-Croix, en Informaticien CFC</p>
    <p>Je suis passioné par le développement web depuis quelque temps et ai envie de rendre le web plus facile et accessible au personne qui n'en ont pas les moyens ni le temps</p>
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
  @if(isset($projects))
    @foreach($projects as $project)
      @include('include.projects.teaser')
    @endforeach
  @endif
</div><!-- /PROJECTS -->
<div class="row about">
  <h1>A propos de moi</h1>
  <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Crystal_personal.svg/2000px-Crystal_personal.svg.png" class="img img-responsive img-rounded" width="200"/>
  <div class="col-md-12">
    <p>Je suis actuellement étudiant au CPNV à Sainte-Croix, en Informaticien CFC</p>
    <p>Je suis passioné par le développement web depuis quelque temps et ai envie de rendre le web plus facile et accessible au personne qui n'en ont pas les moyens ni le temps</p>
    <p>Je suis actuellement en stage chez Kudelski NagraVision, et dans l'équipe de développement et maintenance Web</p>
  </div>
</div>
@include('include.contact')
<!-- BLOG --
<div id="acceuil-blog">
  <h1 class="text-center">Mes derniers posts de blogs</h1>
</div><!-- /BLOG -->
@stop