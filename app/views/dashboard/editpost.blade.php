@extends('dashboard')


@section('dashboard.content')
	{{ Form::open(array('files' => true)) }}
		
	<label for="title"> Title</label>
	<div class="input-group">
	
				 <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
</span>
		<input type="text" value="{{ $post->title }}" name="title" placeholder="Enter the title of your post " class="form-control"/>
		</div>
		<label for="title"> Photo</label>
	<div class="input-group">
		
		 
		<input type="file" value="" name="photo" placeholder="Upload a featured photo" />
		</div>
	
		<label for="content"> Content</label>
	<div class="input-group">
		<textarea class="form-control " cols="160" rows="15" placeholder="Enter your post content"  name="content">{{ $post->content }}</textarea>
		</div>		
		
		</div>
		<div class="input-group">
			<input type="checkbox" name="published" value="1" {{ $post->published ? 'checked="checked"' : '' }} /><label>Published</label>
		</div>		
		
		
		<div class="input-group">
			<select class="form-control" name="categoryId">
				<option value="">Select Category</option>
				@foreach($categories as $category)
					<option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected="selected"' : '' }}>{{ $category->name }}</option>
				@endforeach
			</select>
		</div>
		
	
	
		<button class="btn">Post</button>
	{{ Form::close() }}
@stop