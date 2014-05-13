@extends('frontend')
@section('title', $post->title)
@section('frontend.content')

<div class="post col-md-12">
	
	<h1>{{ $post->title }}</h1>
	<p>{{ $post->content }}</p>
		
		
	
</div>

<div class="post col-md-12">
<h2>Comments for {{ $post->title }}</h2>
<ul class="comment list">
	@foreach ($comments as $comment)
		<li class="comment">
			<h3>{{ $comment->name}} writes...</h3>
			<p>{{ $comment->content }}</p>
		
		</li>
	@endforeach
</ul>

<div class="comment-form col-md-4">
{{ Form::open(array('url' => 'comment/save')) }}

	<label for="username"> Name </label>
	<div class="input-group">
		
		 <span class="input-group-addon">@</span>
		<input type="text" value="" name="name" placeholder="Please enter your name... " class="form-control"/>
	</div>
		<label for="password"> Email </label>	
	<div class="input-group"> 
	
		 <span class="input-group-addon">@</span>
		<input type="text" value="" name="email" placeholder="Please enter your email address..." class="form-control"/>
	</div>
	<label for="content"> Comment</label>	
	<div class="input-group"> 
			
		<textarea class="form-control " cols="70" rows="5" placeholder="Enter your comment"  name="content"></textarea>
		
	</div>	
	<div class="input-group"> 
	<input type="hidden" value="{{ $post->id }}" name="postId" />

	<button class="btn">Add Comment</button>
 
	</div>

{{ Form::close() }}
</div>
</div>
@stop


