@extends ('layouts.master')

@section ('content')

	<div class= "register_form"> 

		<h1>Register</h1>

		<form method="POST" action="/register">
			
			{{csrf_field()}}

			<div class="form-group">
				
				<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>

			</div>

			<div class="form-group">
				
				<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>

			</div>

			<div class="form-group">

				<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>

			</div>

			<div class="form-group">
				
				<input type="password" class="form-control" id="password" name="password_confirmation" placeholder="Password Confirmation" required>

			</div>

			<div class="form-group">

				<button type="submit" class="btn btn-primary">Register</button>

			</div>

			@include ('layouts.errors')

		</form>

	</div>

@endsection