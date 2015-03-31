{!! Form::open(["method"=>"post"]) !!}
  {!! Form::text('name') !!}
  {!! Form::text('email') !!}
  {!! Form::textarea('message') !!}
  {!! Form::submit() !!}
{!! Form::close() !!}
