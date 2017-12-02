@extends('layout')
<link rel="stylesheet" href="/css/papers.css">

@section ('image')
	<div class="banner">
		<div class="img-container">
			<div class="inner-container">
				<h1>publications</h1>
			</div>
		</div>
	</div>
@endsection
@section ('content')
	<div class="col-md-8 offset-md-2">
		<div class="content">
			<p>Google scholar profile</p>
			@if (Auth::check())
				<h2>
					<a href="/papers/upload">Upload new paper</a>
				</h2>
				<br>
	      	@endif
			@foreach($papers as $paper)
				@include('papers.paper')
			@endforeach
		</div>
	</div>
@endsection