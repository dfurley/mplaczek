<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Marysia Placzek Lab</title>
	<link rel="shortcut icon" href="http://www.iconj.com/ico/c/g/cgyczt6ezn.ico" type="image/x-icon" />
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<!-- Custom font -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/footer.css">
</head>
<body>
	<div class="page-content">
		@include('layouts.banner')
		
		@include('layouts.nav')
		
		@yield('image')

		<div class="container">
			<div class="col-md-8 offset-md-2">
				@yield('content')
			</div>
		</div>
	</div>

	@include('layouts.footer')

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>