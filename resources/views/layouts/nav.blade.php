<div class="navbar">

	<a href="/home">
		<img src="images/logo.png">
	</a>	

	<div id="account_button">
		<img src="images/avatar_icon.png">

			@if (Auth::check())

				<a href="#">{{Auth::user()->name }}</a>		<a href="/logout">Logout</a>

			@else
			
				<a href="/login">Login</a> / <a href="/register">Register</a>	

			@endif
	</div>

	@if (Auth::check()&&((Auth::user()->auth_level)>1))

		<div id="admin_button">
			
			<a href="/admin">Admin Page</a>

		</div>
		
	@endif
		
</div>	