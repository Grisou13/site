{!! Form::open(["route"=>"dashboard.projects.store"]) !!}
Title : {!! Form::textarea('title',null,[]) !!}<br>
Teaser : {!! Form::textarea('teaser',null,[]) !!}<br>
Body : {!! Form::textarea('body',null,[]) !!}<br>
Highlighted ? {!! Form::checkbox('highlighted','true') !!}<br>
  {!! Form::submit() !!}
{!! Form::close() !!}