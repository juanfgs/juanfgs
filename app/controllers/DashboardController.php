<?php

class DashboardController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function addPost(){
		$categories = Category::all();
		if(Input::has('title') && Input::has('content')){
			$post = new Post;
			
			
			
			$post->title = Input::get('title');
			$post->content = Input::get('content');
			
			$post->category_id = Input::get('categoryId');
			
			if(Input::has('published')){
				$post->published = Input::get('published');
			}
			$post->save();
			
			return Redirect::to('admin');
		}
		
		return View::make('dashboard.addpost', array('categories' => $categories));
	}

	public function addCategory(){
		if(Input::has('name') ){
			$category = new Category;
			
			$category->name= Input::get('name');
			

			$category->save();
			
			return Redirect::to('admin');
		}
		
		return View::make('dashboard.addcategory');
	}
	
	
	public function editPost($id = null){
		if(isset($id)){
			$categories = Category::all();
			$post = Post::find($id);
			
			
		
			if(Input::has('title') && Input::has('content')){
				
			
				$post->title = Input::get('title');
				$post->content = Input::get('content');
				$post->category_id = Input::get('categoryId');
				if(Input::has('published')){
					$post->published = Input::get('published');
				}
				
				$post->save();
			
				return Redirect::to('admin');
			}
			return View::make('dashboard.editpost', array('post' => $post, 'categories' => $categories));
		}
		return Redirect::intended();
	}
	
	public function showIndex()
	{
			$posts = Post::all();
			$comments= Comment::all();
			return View::make('dashboard.index', array('posts' => $posts, 'comments' => $comments));
		
			
	
		
	}

}
