<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use Auth;
use App\Http\Requests\RegisterRequest;
use App\User;

class AuthController extends Controller {
	/*
		Class constructor
	*/
	public function __construct()
	{
    $this->middleware('guest', ['except' => 'getLogout']);
    $this->middleware('authorizedRegister', ["only"=>["postRegister","getRegister"]]);
	}
  /*
		Get the logout
	*/
  public function getLogout()
  {
    Auth::logout();
    return redirect()->guest('home');
  }
  /*
		Get the login page
	*/
	public function getLogin()
	{
      return view('auth.login');
	}
	/*
		Log the User In
	*/
	public function postLogin(LoginFormRequest $loginRequest)
	{

      if (Auth::attempt($loginRequest->only("email","password"),null!==($loginRequest->input('remember'))))
      {
          return redirect()->intended('dashboard');
      }
      return redirect()->guest('index');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('auth.index');
	}
  /**
   * Register the user, if needed for further implementation
	*/
	public function getRegister()
	{
    
    return view('auth.register');
	}
	/**
	 * Actually register a user
	 *
	 * @return Response
	 */
	public function postRegister(RegisterRequest $req)
	{
		if($user=User::create([$req->only('username','displayName','firstName','lastName','email','password')])){
      Auth::login($user);
      return redirect()->route ("dashboard.index")->withErrors(['Account Created']);
    }
    return redirect()->back()->withError¨s(["Coudn't create account"]);
	}

}
