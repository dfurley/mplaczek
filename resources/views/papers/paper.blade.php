<div class="paper">
	<p class>
		{{ $paper->authors }}
		<br>
		<strong class="paper-title">{{ $paper->title }}</strong>
		<br>
		{{ $paper->publication }}
		<br>
		@if (Auth::check())
			<a href="{{URL::to('/deletepaper/'.$paper->id) }}">Delete</a>
		@endif
	</p>
</div>
