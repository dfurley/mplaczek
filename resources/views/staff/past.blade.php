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
			<p>
				<strong class="paper-title">Sarah Burbridge</strong><br>
				Research Technician, Whitfield lab. University of Sheffield<br>
			</p>
			<p>
				<strong class="paper-title">Kavitha Chinnaiya</strong><br>
				Postdoctoral Researcher, de Vos lab. University of Sheffield<br>
			</p>
			<p>
				<strong class="paper-title">Kim Dale</strong><br>
				Royal Society University Research Fellow and Associate Dean (International). School of Life Sciences, University of Dundee<br>
			</p>
			<p>
				<strong class="paper-title">Raman Das</strong><br>
				MRC Career Development Fellow, University of Manchester<br>
			</p>
			<p>
				<strong class="paper-title">Helen Eachus</strong><br>
				Epistress Network member<br>
			</p>
			<p>
				<strong class="paper-title">Pam Ellis</strong><br>
				Research Assistant, Henriques lab, University of Sheffield<br>
			</p>
			<p>
				<strong class="paper-title">Travis Fu</strong><br>
				Currently completing national service, Taiwan<br>
			</p>
			<p>
				<strong class="paper-title">Emily Hoggar</strong><br>
				Science Communicator, Cancer Research UK<br>
			</p>
			<p>
				<strong class="paper-title">Fang Liu</strong><br>
				Group Leader, Nanchang University, China<br>
			</p>
			<p>
				<strong class="paper-title">Liz Manning</strong><br>
				Research Assistant, Strutt lab, University of Sheffield<br>
			</p>
			<p>
				<strong class="paper-title">Victor Muthu</strong><br>
				Postdoctoral Fellow, Epstein lab, University of Pennsylvania, USA<br>
			</p>
			<p>
				<strong class="paper-title">Kyoji Ohyama</strong><br>
				Assistant Professor, Keio University, Tokyo, Japan<br>
			</p>
			<p>
				<strong class="paper-title">Iain Patten</strong><br>
				Independent Scientific Writing Consultant<br>
			</p>
			<p>
				<strong class="paper-title">Caroline Pearson</strong><br>
				Assistant Project Scientist, Novitch lab, UCLA, USA<br>
			</p>
			<p>
				<strong class="paper-title">Sarah Robins</strong><br>
				Research Associate, Kokoeva lab, McGill University, Canada<br>
			</p>
			<p>
				<strong class="paper-title">Iain Stewart</strong><br>
				Assistant Professor, University of Nottingham<br>
			</p>
			<p>
				<strong class="paper-title">Sandrine Soubes</strong><br>
				Researcher Development Manager, University of Sheffield<br>
			</p>
			<p>
				<strong class="paper-title">Christine Tait</strong><br>
				Postdoctoral Researcher, Wilson lab, Umea University, Sweden<br>
			</p>
			<p>
				<strong class="paper-title">Christine Vesque</strong><br>
				INSERM Permanent Researcher, Pierre and Marie Curie University, Paris, France<br>
			</p>
		</div>
	</div>
@endsection