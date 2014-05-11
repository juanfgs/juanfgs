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
		$posts = Post::where('published', '=', true)->get();
		
		return View::make('posts', array('posts' => $posts));
	}
	
	public function showPost($id = null){
		if(isset($id)){
			$post = Post::find($id);
			$comments = Post::find($id)->comments;
			
			return View::make('post', array('post' => $post, 'comments' => $comments));
		} else {
			return Redirect::to('/404');
		}
	}

}
