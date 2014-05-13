@extends('dashboard')


@section('dashboard.content')
	{{ Form::open() }}
		
	<label for="title"> Title</label>
	<div class="input-group">
				 <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
</span>
		<input type="text" value="" name="title" placeholder="Enter the title of your post " class="form-control"/>
		</div>
	<div class="input-group">
		<label for="content"> Content</label>
	<div class="input-group">
		<textarea class="form-control " cols="160" rows="15" placeholder="Enter your post content"  name="content"></textarea>
		</div>		
		
		</div>
		<div class="input-group">
			<input class="form-control" type="checkbox" name="published" value="1" /><label>Published</label>
		</div>		
		
		<div class="input-group">
			<select class="form-control" name="categoryId">
				<option value="">Select Category</option>
				@foreach($categories as $category)
					<option value="{{ $category->id }}" >{{ $category->name }}</option>
				@endforeach
			</select>
		</div>
		
		 
		<button class="btn">Post</button>
	{{ Form::close() }}
@stop