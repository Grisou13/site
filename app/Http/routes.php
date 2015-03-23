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
Route::resource('projects','ProjectController');
Route::group(['prefix'=>'blog'],function(){
	Route::any('/',['as'=>'blog.index',function(){
		return view('blog.index');
	}]);
	Route::resource('comments','CommentController');
	Route::resource('post','PostController');
});
Route::controller('contact','ContactController',['except'=>'create']);

