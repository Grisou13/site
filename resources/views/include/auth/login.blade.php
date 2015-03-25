{!! Form::open(['controller'=>'AuthController@postLogin',"method"=>"POST"]) !!}
  Email : {!! Form::text('email') !!}
  Password : {!! Form::password('password') !!}
  Remember : {!! Form::checkbox('remember','remember') !!}
  {!! Form::submit('Login') !!}
{!! Form::close() !!}
