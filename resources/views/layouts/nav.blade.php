<div class="navbar">

	<a href="/home">
		<img src="{{ asset('images/logo.png') }}">
	</a>	

	<div id="account_button">

		<a href="/account">
			<img src="{{ asset('images/avatar_icon.png') }}">

		</a>	

			@if (Auth::check())

				<a href="/account">{{Auth::user()->name }}</a>		
				<a class="logout_button" href="/logout">Logout</a>

			@else
			
				<a href="/login">Login</a> / <a href="/register">Register</a>	

			@endif
	</div>

	@if (Auth::check()&&((Auth::user()->auth_level)>0))

		<div id="admin_button">
			
			<a href="/add">Add Gasstation</a>

		</div>
		
	@endif

	@if (Auth::check()&&((Auth::user()->auth_level)>1))

	<div id="admin_button">
			
			<a href="/admin/users">Users</a>

		</div>

	@endif

		
</div>	