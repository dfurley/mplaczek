<nav class="navbar navbar-expand-md navbar-dark">
  <div class="container">
  	<div class="col-md-10 offset-md-1">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="/">Home</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="/research">Research</a>
	      </li>

	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          People
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="/staff/current">Current Lab Members</a>
	          <a class="dropdown-item" href="/staff/past">Past Lab Members</a>
	        </div>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="/papers">Papers</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="/contact">Contact</a>
	      </li>

	    </ul>
	    <ul class="navbar-nav ml-auto">
		    @if (Auth::check())
				<li class="nav-item">
					<a href="/logout" class="nav-link ml-auto">Logout</a>
				</li>
	      	@endif
	    </ul>
	  </div>
	</div>
  </div>
</nav>


