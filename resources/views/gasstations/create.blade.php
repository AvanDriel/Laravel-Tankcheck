@extends ('layouts.admin')

@section ('content')

	<div class="spacer"></div>

	<div class= "create_form"> 

		<h1>Add new Gasstation</h1>

		<form method="POST" action="/add">
			
			{{csrf_field()}}

			<div class="form-group">
				
				<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>

			</div>

			<div class="form-group">
				
				<input type="text" class="form-control" id="adress" name="adress" placeholder="Adress" required>

			</div>

			<div class="form-group">
				
				<input type="number" step="any" class="form-control" id="gasprice" name="gasprice" placeholder="Gas Price" >

			</div>

			<div class="form-group">
				
				<input type="number" step="any" class="form-control" id="latitude" name="latitude" placeholder="Latitude" required>

			</div>

			<div class="form-group">
				
				<input type="number" step="any" class="form-control" id="longitude" name="longitude" placeholder="Longitude" required>

			</div>

			<div class="form-group">
				
				<input type="hidden" name="created_by" id="created_by" value="{{$currentuser = Auth::user()->id}}">

			</div>

			<div class="form-group">
				
				<input type="hidden" name="updated_by" id="updated_by" value="{{$currentuser = Auth::user()->id}}">

			</div>

			<div class="form-group">

				<button type="submit" class="btn btn-primary">Add</button>

			</div>

			@include ('layouts.errors')

		</form>

	</div>

@endsection