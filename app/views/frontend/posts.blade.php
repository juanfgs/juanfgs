@extends('frontend')
@section('title', 'Blog')
@section('frontend.content')
<h1>Latest Posts</h1>
<ul class="posts list">
	@foreach ($posts as $post)
		<li class="entry">
			<h2><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h2>
			<p>{{ $post->content }}</p>
		
		</li>
	@endforeach
</ul>

@stop