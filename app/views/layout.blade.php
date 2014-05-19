<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>

{{ HTML::style('bootstrap/css/bootstrap.min.css'); }}

{{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js'); }}
@yield('includes')
</head>

<body>



		<header  >
			<!--Renders the Page header define in template as (at)section('header') -->
			@yield('header')
		</header>

	<div class="container">
		<div class="row">
			<!--Renders the Page content -->
			@yield('content')
		</div>
		<div class="clearer"></div>

	</div>
		<div id="footer">
			@yield('footer')
		</div>

	{{ HTML::script('bootstrap/js/bootstrap.min.js'); }}


</body>

</html>
