@extends('layout')
@section('title', 'Admin Dashboard')
@section('includes')
	 {{ HTML::style('css/backend.style.css'); }}
	 {{ HTML::script('packages/tinymce/js/tinymce/tinymce.min.js') }}
@stop


@section('header')


	<nav  class="navbar navbar-inverse navbar-fixed-top"  role="navigation">
	<div class="container">
		<ul class="nav navbar-nav">
			<li><a href="/admin">Dashboard</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">Posts  <b class="caret"></b></a>
				 <ul class="dropdown-menu">
					<li><a href="/admin/posts/add">Add Post</a></li>
					<li><a href="/admin/posts">List Posts</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">Categories  <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="/admin/categories/add">Add a Category</a></li>
					<li><a href="/admin/categories">List Categories</a></li>
				</ul>
			</li>
		<li><a href="/">View Site <span class="glyphicon glyphicon-arrow-right"></span></a></li>
		</ul>
	</div>
	</nav>
@stop

@section('content')
	@yield('dashboard.content')
	{{ HTML::script('bootstrap/bootstrap-wysiwyg.js'); }}
	<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>

@stop
