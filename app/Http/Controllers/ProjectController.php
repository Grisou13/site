<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Project;
use App\Http\Requests\StoreProject;
use Auth;
class ProjectController extends Controller {
  public function __construct() {
    $this->middleware('App\Http\Middleware\Authenticate',["except"=>["show","index"]]);
  }

  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('projects.index',["projects"=>  Project::all()]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(StoreProject $req)
	{
    $project = new Project([
      "user_id"=>Auth::id(),
      "body"=>$req->input('body'),
      "teaser"=>$req->input('teaser'),
      'title'=>$req->input('title'),
      'highlighted'=>$req->has('highlighted')]);
    $project->slug=$project->generateSlug();
		if($project->save()){
        return redirect ()->back ()->withErrors(['project created']);
    }
    return redirect()->back()->withErrors(['coudn\'t create project']);
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
