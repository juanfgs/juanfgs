@extends('layout')
@section('title', 'Admin Dashboard')

@section('includes')
	 {{ HTML::style('css/frontend.style.css'); }}
@stop

@section('header')


	<nav  class="navbar navbar-default"  role="navigation">
		<ul class="nav navbar-nav">
			<li><a href="/">Home</a></li>
			<li><a href="/posts">Blog</a></li>
		
		</ul>

	</nav>
@stop



@section('content')
	@yield('frontend.slider')
	@yield('frontend.content')
	@yield('frontend.sidebar')
	
	
@stop

@section('footer')
	
	<div class="container">
	<p><a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" /></a>&nbsp;This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.</p>
	</div>
	
	
	

@stop