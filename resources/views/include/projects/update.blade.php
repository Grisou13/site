{!! Form::open(["route"=>"dashboard.projects.update"]) !!}
  {!! Form::textarea('title',$project->title!==null?$project->title:'',[]) !!}
  {!! Form::textarea('teaser',$project->teaser!==null?$project->teaser:'',[]) !!}
  {!! Form::textarea('body',$project->body!==null?$project->body:'',[]) !!}
  {!! Form::checkbox('highlighted','true',$project!==null&&$project->highlighted?true:false) !!}
  {!! Form::submit() !!}
{!! Form::close() !!}

