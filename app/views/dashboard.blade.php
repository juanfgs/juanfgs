@extends('layout')
@section('title', 'Admin Dashboard')


@section('header')


	<nav  class="navbar navbar-default"  role="navigation">
		<ul class="nav navbar-nav">
			<li><a href="/admin">Dashboard</a></li>
			<li><a href="/admin/posts/add">Add Post</a></li>
		
		</ul>
		 <ul class="nav navbar-nav navbar-right">
			<li><a href="/">View Site <span class="glyphicon glyphicon-arrow-right"></span>
</a></li> 
		 </ul>
	</nav>
@stop

@section('content')
	@yield('dashboard.content')
@stop