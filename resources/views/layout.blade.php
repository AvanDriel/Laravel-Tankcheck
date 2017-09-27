<!DOCTYPE html>
<html>
<head>
	<title>My app</title>
	<link type="text/css" href="css/app.css" rel="stylesheet"/>
</head>
<body>

	@include('layouts.nav')

	<div>
		@yield('content')
	</div>	

	
	@include('layouts.footer')
	

</body>
</html>