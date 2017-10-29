<!DOCTYPE html>
<html>
<head>
	<title>My app</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>

	@include('layouts.nav')

	<div class="content">
		@yield('content')
	</div>	

	
	@include('layouts.footer')
	

</body>
</html>