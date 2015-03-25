{!! Form::open(['route'=>'auth.create',"method"=>"post"]) !!}
  Username : {!! Form::text('username') !!}
  Email : {!! Form::text('email') !!}
  Password : {!! Form::password() !}}
{!! Form::close() !!}