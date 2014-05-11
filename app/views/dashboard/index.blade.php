@extends('dashboard')



@section('dashboard.content')
	<div class="col-md-6">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Posts</h3>
			</div>
		<div class="panel-body">
		<div class="list-group">
		@foreach ($posts as $post)
			<a  class="list-group-item" href="/admin/posts/edit/{{ $post->id }}">{{ $post->title }}  
			
			 <span class="badge">{{ $post->published ? 'published' : 'draft' }}</span> 
			</a>
		@endforeach
		</div>
		</div><!-- end panel body-->
		
		</div><!-- end panel -->
		
	</div> <!-- end column -->
	<div class="col-md-6">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Posts</h3>
			</div>
		<div class="panel-body">
		<div class="list-group">
		@foreach ($posts as $post)
			<a  class="list-group-item" href="/admin/posts/edit/{{ $post->id }}">{{ $post->title }}  
			
			 <span class="badge">{{ $post->published ? 'published' : 'draft' }}</span> 
			</a>
		@endforeach
		</div>
		</div><!-- end panel body-->
		
		</div><!-- end panel -->
		
	</div> <!-- end column -->
@stop

