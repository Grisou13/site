
<div class="contact row">
  <h1>Contactez-moi !</h1>
{!! Form::open(["action"=>"ContactController@postContactform","class"=>"form-horizontal"]) !!}
  {!! Form::text('name') !!}
  {!! Form::text('email') !!}
  {!! Form::textarea('message') !!}
  {!! Form::submit() !!}
{!! Form::close() !!}
</div>

