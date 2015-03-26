<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as'=>'index','uses'=>'WelcomeController@index']);

Route::group(['prefix'=>'blog'],function(){
	Route::any('/',['as'=>'blog.index',function(){
		return view('blog.index');
	}]);
	Route::resource('comments','CommentController');
	Route::resource('post','PostController');
});
Route::controller('auth','AuthController');
Route::controller('contact','ContactController');

Route::get('/language',["as"=>"lang.selector","uses"=>"LanguageController@changeLanguage"]);
Route::group(['prefix'=>'dashboard'],function(){
  Route::get('/',['as'=>'dashboard.index','uses'=>'DashboardController@index']);
  Route::resource('projects','ProjectController');//routes to be controlled by dashboard
});
Route::resource('projet','ProjectController',["only"=>["show","index"]]);