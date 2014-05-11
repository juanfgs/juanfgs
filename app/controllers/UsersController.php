<?php

class UsersController extends BaseController {

	

	public function login()
	{
		$usersCount = User::all()->count();
			
		if($usersCount < 1) {
			return Redirect::to('register');
		}
		return View::make('login');
	}
	
	public function register(){
		
	
		return View::make('register');
	}
	
	public function processRegister(){
		if(Input::has('username') && Input::has('password') && Input::has('email')){
				
			$user = new User;
			$password = Input::get('password');
			
			$user->username = Input::get('username');
			
			$user->email = Input::get('email');
			$user->password = Hash::make($password);
			$user->save();
			return Redirect::intended();
		}
		
		
		
		
	}
	

	public function processLogin(){
		if( Auth::attempt( array('username' => Input::get('username'), 'password' => Input::get('password') ) ) ){
			return Redirect::intended();
		} else {
			return View::make('invalidLogin');
		}
	}
	
}
