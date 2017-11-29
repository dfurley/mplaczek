@extends ('layout')

@section ('content')
	<div class="content">
		<h2>Upload new paper</h2>
		<form method="POST" action="/papers">
			{{ csrf_field() }}
			  <div class="well">
				  <div class="form-group">
				    <label for="authors">Authors</label>
				    <input type="text" class="form-control" id="authors" name="authors">
				  </div>

				  <div class="form-group">
				    <label for="title">Title</label>
				    <input type="text" class="form-control" id="title" name="title">
				  </div>

				  <div class="form-group">
				    <label for="publication">Publication</label>
				    <input type="text" class="form-control" id="publication" name="publication">
				  </div>

				  <button type="submit" class="btn btn-primary">Submit</button>
			  </div>
		</form>
	</div>
@endsection