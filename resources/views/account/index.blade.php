@extends ('layouts.nobar')


@section ('content')

	<div class="spacer"></div>

	<h1>Account Page</h1>

	<div class="account_data">
		<p>	Name: {{$user->name}}<br>
			Email: {{$user->email}}<br>
			Checked Prices: {{$user->prices_checked}}<br>
			Prices Approved by others: {{$user->prices_approved}}<br>
		</p>	
	</div>


@endsection