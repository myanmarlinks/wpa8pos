<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ Lang::get('pos.site_title') }}</title>
	@include('pos.metadata')
	@yield('head')
</head>
<body>
	@yield('header')
	<div class="row" id="container">
		@include('pos.sidebar')
		@yield('content')
		@include('pos.footer')
	</div> <!-- end of container -->
</body>
</html>