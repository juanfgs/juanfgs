@extends('frontend')
@section('title', 'Blog')
@section('frontend.content')
<div class="col-md-9">

<ul class="posts list">
	@foreach ($posts as $post)
		<li class="entry">
			<h2><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h2>
			<p>{{ $post->content }}</p>
		
		</li>
	@endforeach
</ul>
</div>
@stop

@section('frontend.sidebar')
<div class="col-md-3">
	<div class="list-group">
		@foreach ($categories as $category)
		  <a href="/posts/category/{{ $category->id }}" class="list-group-item">{{ $category->name}} <span class="badge">{{ $category->posts()->count() }}</span> </a>
		@endforeach 
	</div>
</div>
@stop