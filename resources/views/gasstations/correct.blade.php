@extends ('layouts.nobar')

@section ('content')

	<div class="spacer"></div>

	<div>
		
		<h2>Correct price</h2>

		<form method="POST" action="/price/correct">
			
			{{csrf_field()}}

			<div class="form-group">
				
				<input type="number" step="any" class="form-control" id="gasprice" name="gasprice" placeholder="Gas Price" required>

			</div>


			<div class="form-group">
				
				<input type="hidden" name="station_id" id="station_id" value="{{$id}}">

			</div>


			<div class="form-group">

				<button type="submit" class="btn btn-primary">Send</button>

			</div>

			@include ('layouts.errors')

		</form>

	</div>

@endsection