@extends ('layouts.master')

@section ('content')

	<div class="spacer"></div>

	<div class= "login_form"> 

		<h1>Sign In</h1>
 
		<form method="POST" action="/login">
			
			{{ csrf_field() }}

			<div class="form-group">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email">
			</div>

			<div class="form-group">
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
			</div>

			<div class="form-group">				
				<button type="submit" class="btn btn-primary">Sign In</button>
			</div>

		</form>

		@include ('layouts.errors')

@endsection