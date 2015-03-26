<div class="row project">
    <h1>{{$project->title}}</h1>
    {{$project->teaser}}
    <a href="{{route('projet.show',["project"=>$project->slug])}}" class="btn btn-primary">En savoir plus</a>
</div>
