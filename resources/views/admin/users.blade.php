@extends ('layouts.nobar')


@section ('content')

	<div class="spacer"></div>

	<h1>List of Users</h1>

	<div class="search_form">

		<div class="tablecell"><h3>Seach for a User:</h3></div>

		<form method="POST" action="/admin/users/search">
			
			{{csrf_field()}}

			<div class="form-group tablecell">
				
				<div class="tablecell"><input type="text" class="form-control username_input" id="name" name="name" placeholder="User Name"></div>

			</div>


			<div class="form-group tablecell">
				<div class="tablecell"><label for="active">Active User:</label></div>
				<div class="tablecell"><input type="radio" name="active" value="1"> Yes <br></div>
				<div class="tablecell"><input type="radio" name="active" value="0"> No  </div>
			</div>


			<div class="form-group tablecell">

				<div class="tablecell"><button type="submit" class="btn btn-primary">Search</button></div>

			</div>

			@include ('layouts.errors')

		</form>

	</div>

	<div class="spacer"></div>

	<div class="user_list">
		{{-- for each user, make one row --}}
		@foreach ($users as $user)
			<div class="row">
				<ul class="user_row">
					<li>
						
						{{-- name --}}
						Name: {{$user->name}}
						
					</li>

					<li>
						
						{{-- Prices checked --}}
						Checked Prices: {{$user->prices_checked}}
						
					</li>

					<li>
						
						{{-- Prices approved --}}
						Prices approved by others: {{$user->prices_approved}}
						
					</li>

					<li>
						
						{{-- Auth level --}}
						Authentication level: {{$user->auth_level}}
						
					</li>

					<li>
						
						{{-- active switch --}}											
						<form method="POST" action="/admin/activity/{{$user->id}}" style="display: inline-block;">
				            {{ csrf_field() }}
				            @if($user->active === 1)
					            <button class="btn btn-primary" type="submit">
					                <i>Disable User</i>
					            </button>
				            @else
					            <button class="btn btn-secondary" type="submit">
					                <i>Enable User</i>
					            </button>
				            @endif
				        </form>
						
						
					</li>
				</ul>
			</div>
		@endforeach	
	</div>


@endsection