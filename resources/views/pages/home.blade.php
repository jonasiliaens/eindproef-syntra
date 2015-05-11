@extends('master')

@section('carousel')

  @include('partials.carousel')

@endsection

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<h1>Trainingen</h1>
	</div>
</div>

<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12 text-center">
      	<a href="{{ url('/trainingen/privétraining') }}"><img src="{{ asset('/img/class1.jpg') }}" alt="img" class="img-responsive"></a>
      	<a href="{{ url('/trainingen/privétraining') }}"><h3>Privétraining</h3></a>
        <h5>Een personal coach</h5>
      	<p>Privé of mini-groep tot maximum 6 personen. In ons privé zaaltje, gelegen te Lubbeek.</p>
		</div>
    
		<div class="col-md-3 col-sm-6 col-xs-12 text-center">
      	<a href="{{ url('/trainingen/muaythai') }}"><img src="{{ asset('/img/techniek3.jpg') }}" alt="img" class="img-responsive"></a>
      	<a href="{{ url('/trainingen/muaythai') }}"><h3>Groepstrainingen</h3></a>
        <h5>Muay thai / Muay Boran</h5>
      	<p>Onze groepstrainingen gaan door in de turnzaal van de wijkschool Liemingen in Kessel-Lo.</p>
		</div>
    
		<div class="col-md-3 col-sm-6 col-xs-12 text-center">
			<a href="{{ url('/trainingen/kidz-mix') }}"><img src="{{ asset('/img/kidzmix2.jpg') }}" alt="" class="img-responsive"></a>
			<a href="{{ url('/trainingen/kidz-mix') }}"><h3>Kidz Mix</h3></a>
			<h5>Voor jongeren 6 - 14 jaar</h5>
			<p>Jongeren kunnen op een veilige, leuke manier werken aan hun conditie, coördinatie, respect, ...</p>
		</div>
    
		<div class="col-md-3 col-sm-6 col-xs-12 text-center">
			<a href="{{ url('/trainingen/condition') }}"><img src="{{ asset('/img/condition1.jpg') }}" alt="" class="img-responsive"></a>
			<a href="{{ url('/trainingen/condition') }}"><h3>Conditietrainingen</h3></a>
			<h5>Op een leuke manier fit!</h5>
			<p>Alive 'n Kicking biedt een volledig uitgebalanceerde conditietraining aan.</p>
		</div>
</div>

	<hr>

	<div class="row">
		<div class="col-md-12">
			<h1>Producten</h1>
		</div>
	</div>

	<div class="row">
  		<div class="col-md-3 col-sm-6 col-xs-12 text-center">
        	<a href="{{ url('/producten') }}"><img src="{{ asset('/img/kledij.jpg') }}" alt="img" class="img-responsive"></a>
        	<a href="{{ url('/producten') }}"><h3>Kledij</h3></a>
        	<p>Wij hebben een ruim assortiment trainingskledij van gekende merken zoals twins, windy..., maar neem zeker ook  eens een kijkje naar onze eigen outfits (t-shirts, trainingsbroeken, pulls,...).</p>
  		</div>

  		<div class="col-md-3 col-sm-6 col-xs-12 text-center">
        	<a href="{{ url('/producten') }}"><img src="{{ asset('/img/bokshandschoenen.jpg') }}" alt="img" class="img-responsive"></a>
        	<a href="{{ url('/producten') }}"><h3>Bokshandschoenen</h3></a>
        	<p>Misschien wel het belangrijkste instrument voor iemand die gevechtsport beoefend. Wij hebben een ruim assortiment van bekende merken als Twins en King in alle maten.</p>
  		</div>

  		<div class="col-md-3 col-sm-6 col-xs-12 text-center">
  			<a href="{{ url('/producten') }}"><img src="{{ asset('/img/bescherming.jpg') }}" alt="" class="img-responsive"></a>
  			<a href="{{ url('/producten') }}"><h3>Bescherming</h3></a>
  			<p>Uiteraard wil je op een veilige manier je sport uitoefenen, zonder kwetsures op te lopen. Een goede beschermde uitrusting is hiervoor van groot belang. Neem een kijkje wat wij u aanbieden.</p>
  		</div>

  		<div class="col-md-3 col-sm-6 col-xs-12 text-center">
  			<a href="{{ url('/producten') }}"><img src="{{ asset('/img/accessoires.jpg') }}" alt="" class="img-responsive"></a>
  			<a href="{{ url('/producten') }}"><h3>Accessoires</h3></a>
  			<p>Hier vindt u al onze accessoires. Van thai pads en focus mitts tot sportzakken.</p>
  		</div>
	</div>
@endsection