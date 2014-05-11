<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'PostsController@showIndex');

Route::get('admin', array( 'uses' => 'DashboardController@showIndex'));
Route::get('admin/posts/add', 'DashboardController@addPost');
Route::post('admin/posts/add', 'DashboardController@addPost');
Route::get('admin/posts/edit/{id}', 'DashboardController@editPost');
Route::get('post/{id}', 'PostsController@showPost');

Route::get('login', 'UsersController@login'); 
Route::get('register', 'UsersController@register'); 

Route::post('comment/save', 'CommentsController@saveComment');
Route::post('login/process', 'UsersController@processLogin');
Route::post('register/process', 'UsersController@processRegister');

Route::get('/404', function(){
	View::make('notfound');
});


/*
	Routing pattern
*/

Route::when('admin/*', 'isLoggedIn');

/*Defining Route Filters*/

Route::filter('isLoggedIn', function(){
		if(!Auth::check())
			return Redirect::to('/login');
});
