@extends('layout')
@section('title', 'Please Login' )


@section('content')
<div class="col-lg-3 col-offset-9 centered">
<h1>Login </h1>

{{ Form::open(array('url' => 'login/process' )) }}
	<label for="username"> User Name </label>
	<div class="input-group">
		
		 <span class="input-group-addon">@</span>
		<input type="text" value="" name="username" placeholder="Please enter your username... " class="form-control"/>
	</div>
		<label for="password"> Password </label>	
	<div class="input-group"> 
	
		 <span class="input-group-addon">?</span>
		<input type="password" value="" name="password" placeholder="Please enter your password..." class="form-control"/>
	</div>
	
	<div class="input-group"> 
 
	<button class="btn">Log In </button>
	<button class="btn">Register </button>
 
	</div>
{{ Form::close() }}

</div>
@stop