<?php

class HomeController extends BaseController {

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

	public function showWelcome()
	{

		$slides = Post::with('category')->whereHas('category', function($q){
			$q->where('name', '=', 'slideshow');
			$q->orderBy('created_at', 'DESC');
		})->take(3)->get();
		$slides[0]->active = true;
		$featured = Post::with('category')->whereHas('category', function($q){
			$q->where('name', '=', 'featured');
			$q->orderBy('created_at', 'DESC');
		})->take(3)->get();

		$latest = Post::orderBy('created_at', 'DESC')->take(5)->get();

		return View::make('frontend.home', array('featured_posts' => $featured, 'latest' => $latest, 'slides' => $slides));
	}

}
