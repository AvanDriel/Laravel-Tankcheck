<div class="navbar">

	<img src="images/logo.png">

	<div id="account_button">
		<a href="/register"><img src="images/avatar_icon.png">

			@if (Auth::check())

				{{Auth::user()->name }}

			@else
			
				Login / Register	

			@endif

		</a>
	</div>
		
</div>	