@extends('layout')
@section('title', 'Admin Dashboard')


@section('header')


	<nav  class="navbar navbar-default"  role="navigation">
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

	</nav>
@stop

@section('content')
	@yield('dashboard.content')
	{{ HTML::script('bootstrap/bootstrap-wysiwyg.js'); }}
	<script type="text/javascript">
		$(document).ready(function(){
			
			
		});
	 </script>
	
@stop