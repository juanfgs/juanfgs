<?php

class PostsController extends BaseController {



	public function showIndex($id = null )
	{
		if(isset($id)){
			$posts = Category::find($id)->posts()->take(10)->paginate(10);


		} else {
			$posts = Post::where('published', '=', true)->take(10)->paginate(10);
		}


		$categories = Category::all();

		return View::make('frontend.posts', array('posts' => $posts, 'categories' => $categories));
	}

	public function showPost($id = null){
		if(isset($id)){
			$post = Post::find($id);
			$comments = Post::find($id)->comments;

			return View::make('frontend.post', array('post' => $post, 'comments' => $comments));
		} else {
			return Redirect::to('/404');
		}
	}

}
