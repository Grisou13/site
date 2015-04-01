{!! Form::open(['method'=>'AuthController@postRegister',"method"=>"post"]) !!}
Username : {!! Form::text('username') !!}<br>
  Display name {!! Form::text('displayName') !!}<br>
  First name {!! Form::text('firstName') !!}<br>
  Last name {!! Form::text('lastName') !!}<br>
  Email : {!! Form::text('email') !!}<br>
  Password : {!! Form::password('password') !!}<br>
  Password again : {!! Form::password('password_again') !!}<br>
  {!! Form::submit() !!}
{!! Form::close() !!}