@extends('dashboard')


@section('dashboard.content')
	{{ Form::open() }}
		
	<label for="title"> Name</label>
	<div class="input-group">
				 <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
</span>
		<input type="text" value="" name="name" placeholder="Enter the title of your post " class="form-control"/>
	</div>
	
		<button class="btn">Create Category</button>
	{{ Form::close() }}
@stop