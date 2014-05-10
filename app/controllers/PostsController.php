<?php

class PostsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/posts', 'PostsController@showIndex');
	|
	*/

	public function showIndex()
	{
		$posts = Post::all();
		
		return View::make('posts', array('posts' => $posts));
	}

}
