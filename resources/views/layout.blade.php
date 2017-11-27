<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Marysia Placzek Lab</title>
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<!-- Custom font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('layouts.banner')

	@include('layouts.nav')
	
	<div class="container">
		<div class="col-md-10 offset-md-1">
			@yield('content')
		</div>
	</div>
</body>
</html>