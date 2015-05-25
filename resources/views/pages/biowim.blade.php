@extends('master')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Biografie van Wim Van Cauteren</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<p>Wim Van Cauteren is geboren te Brussel op 1 juli 1983.</p>

		<h3>Studies:</h3>
		<h5>Humaniora:</h5>
		<p>Lichamelijke Opvoeding en Sport te Parnas Dilbeek</p>

		<h3>Vechtsportervaring:</h3>
		<h5>1990 – 2002</h5>
		<p>Judo in Judoclub Itterbeek-Schepdaal.</p>
		<h5>2004 – 2005</h5>
		<p>Kickboxing Tervuren</p>
		<h5>2006 - 2014</h5>
		<p>Muay Thai, Muay Boran, MMA, JKD in FAMA - Defcross Leuven.</p>
		<h5>2010</h5>
		<p>Level 3 onder the United World Muay Thai Council.</p>
		<h5>2013 - 2014</h5>
		<p>Hulptrainer Muay Thai en 5th Khan Brown onder VKBMO.</p>
	</div>

	<div class="col-md-6">
		<img src="{{ asset('/img/wim2.jpg') }}" alt="" class="img-responsive">
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<p>Verschillende seminaries met Matthew Teasdale, Ivan Hippolyte, Peter Aerts, Ron Balicki, 
		Daniël Loreno, José Aldo, Miesha Tate, Rico Verhoeven, Ernesto Hoost, ...</p>
		<p>Wim is al enkele jaren een vaste waarde als hulptrainer en coach voor de competitieve leden bij 
		FAMA Defcross. </p>
	</div>
</div>

@endsection