@if($project->title)
{!! Form::open(["route"=>"dashboard.projects.update"]) !!}
@else
{!! Form::open(["route"=>"dashboard.projects.store"]) !!}
@endif

  {!! Form::text('title',$project->title!==null?$project->title:'',[]) !!}
  {!! Form::textarea('teaser',$project->teaser!==null?$project->teaser:'',[]) !!}
  {!! Form::textarea('body',$project->body!==null?$project->body:'',[]) !!}
  {!! Form::checkbox('highlighted','true',$project->highlighted!==null?true:false) !!}
  {!! Form::submit() !!}
{!! Form::close() !!}