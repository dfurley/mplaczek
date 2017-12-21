@extends ('layout')

@section ('content')
	<div class="content">
		<h2>Add new staff member</h2>
		<form method="POST" action="/staff">
			{{ csrf_field() }}
			<div class="well">
			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" id="name" name="name" required>
			  </div>

			  <div class="form-group">
			    <label for="position">Position</label>
			    <input type="text" class="form-control" id="position" name="position" required>
			  </div>

			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" class="form-control" id="email" name="email" required>
			  </div>

			  	<div class="form-check">
				  <label class="form-check-label" for="current/past">
				    <input class="form-check-input" type="radio" name="current/past" value="current">
				    Current lab member
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label" for="current/past">
				    <input class="form-check-input" type="radio" name="current/past" value="past">
				    Past lab member
				  </label>
				</div>

			  <div class="form-group">
			  	<button type="submit" class="btn btn-primary">Submit</button>
			  </div>
			</div>

			@include('layouts.errors')
		</form>
	</div>
@endsection