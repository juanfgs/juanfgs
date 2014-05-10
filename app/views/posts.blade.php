@extends('layout')

@section('content')
<h1>Latest Posts</h1>
<ul class="posts list">
	@foreach ($posts as $post)
		<li class="entry">
			<h2>{{ $post->title }}</h2>
			<p>{{ $post->content }}</p>
		
		</li>
	@endforeach
</ul>

@stop