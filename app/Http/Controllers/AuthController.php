<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use Auth;

class AuthController extends Controller {
	/*
		Class constructor
	*/
	public function __construct()
	{
    $this->middleware('guest', ['except' => 'getLogout']);
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
   * Register the user, if needed for further implementation
	*/
	public function register()
	{

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
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->register();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
