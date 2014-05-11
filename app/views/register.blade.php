@extends('layout')
@section('title', 'Please Register' )


@section('content')
<div class="col-lg-4 col-offset-8 centered">
<h1>Register New User </h1>

{{ Form::open(array('url' => 'register/process' )) }}
	<label for="username"> User Name </label>
	<div class="input-group">
		
		 <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
</span>
		<input type="text" value="" name="username" placeholder="Please enter your username... " class="form-control"/>
	</div>
	<label for="email"> User Email</label>
	<div class="input-group">
		
		 <span class="input-group-addon">@</span>
		<input type="text" value="" name="email" placeholder="Please enter your email... " class="form-control"/>
	</div>
	
		<label for="password"> Password </label>	
	<div class="input-group"> 
	
		 <span class="input-group-addon">?</span>
		<input type="password" value="" name="password" placeholder="Please enter your password..." class="form-control"/>
	</div>
	
	<div class="input-group"> 
 
	<button class="btn">Register </button>
 
	</div>
{{ Form::close() }}

</div>
@stop