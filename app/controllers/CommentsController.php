<?php

class CommentsController extends BaseController {

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

	public function saveComment()
	{
		if(Input::has('postId')){
			if(Input::has('name') && Input::has('content')){
				$comment = new Comment;
				$comment->content = Input::get('content');
				$comment->email = Input::get('email');
				$comment->name = Input::get('name');
				$comment->post_id = Input::get('postId');
				$comment->save();
				
				return Redirect::intended();
			}
		}
	}

}
