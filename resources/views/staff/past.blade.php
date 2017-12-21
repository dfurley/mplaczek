@extends('layout')

<link rel="stylesheet" href="/css/people.css">

@section ('image')
	<div class="banner">
		<div class="img-container">
			<div class="inner-container">
				<h1>past lab members</h1>
			</div>
		</div>
	</div>
@endsection
@section ('content')
	<div class="col-md-8 offset-md-2">
		<div class="content">
			
			@if (Auth::check())
				<h2>
					<a href="/staff/create">Add new staff member</a>
				</h2>
				<br>
	      	@endif

			@foreach($staff as $member)
				<p>
					<strong class="paper-title">{{ $member->name }}</strong><br>
					{{ $member->position }}<br>
					@if (Auth::check())
						<a href="{{URL::to('/staff/edit/'.$member->id) }}";">Edit</a> -
						<a href="{{URL::to('/deletestaff/'.$member->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
					@endif
				</p>	
			@endforeach

		</div>
	</div>
@endsection