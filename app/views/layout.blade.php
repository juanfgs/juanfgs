<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>

{{ HTML::style('bootstrap/css/bootstrap.min.css'); }}
{{ HTML::style('bootstrap/css/bootstrap-theme.min.css'); }}


</head>

<body>
	<div class="container">
	
	
		<header class="row" >
			<!--Renders the Page header define in template as (at)section('header') -->
			@yield('header')
		</header>
		<div class="row">
			<!--Renders the Page content -->
			@yield('content')
		</div>
	
	</div>
	
	{{ HTML::script('bootstrap/js/bootstrap.min.js'); }}
</body>

</html>