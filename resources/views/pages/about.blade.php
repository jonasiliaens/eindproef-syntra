@extends('master')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>About Us</h1>
    <hr>
	</div>
</div>

<div class="row">
  <div class="col-md-8 col-sm-6 col-xs-12">
    <p>Alive ‘n Kicking is een sportschool dat in hoofdzaak vechtsport- en conditietrainingen aanbiedt.</p>
    <p>Dit alles in een gemoedelijke en gezellige sfeer tijdens de groepstrainingen maar ook tijdens privé begeleiding in de eigen privé sportaccommodatie te Lubbeek.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-3 col-sm-6 col-xs-12">
    <img src="img/class1.jpg" alt="" class="img-responsive">
  </div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <img src="img/class2.jpg" alt="" class="img-responsive">
  </div>
  
  <div class="col-md-3 col-sm-6 col-xs-12">
    <img src="img/kidzmix2.jpg" alt="" class="img-responsive">
  </div>
  
  <div class="col-md-3 col-sm-6 col-xs-12">
    <img src="img/class4.jpg" alt="" class="img-responsive">
  </div>
</div>

<div class="row">
  <div class="col-md-8">
    <h3>Iedereen welkom</h3>
    <p>Wij verwelkomen alle conditionele en technische niveaus bij Alive ‘n Kicking. Wat je conditie ook is, deze zal steeds beter worden naarmate je traint bij ons. Wij zullen er alles aan doen en het beste van onszelf geven om samen met jou het gewenste doel te bereiken!</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Lesgevers</h2>
  </div>
</div>

<div class="row">
  <div class="col-md-3">
    <img src="img/tim.jpg" alt="" class="img-responsive">
  </div>

  <div class="col-md-3">
    <h3>Tim Iliaens</h3>
    <p>Tim is hoofdtrainer bij Alive 'n Kicking en heeft een ruime ervaring in verschillende 
    gevechtssporten. </p>
    <p>Hij heeft een bachelor in lichamelijke opvoeding met als specialisatie vechtsport.</p>

    <a href="{{ url('/about-us/bio-tim') }}">Volledige biografie</a>
  </div>
  
  <div class="col-md-3">
    <img src="img/wim.jpg" alt="" class="img-responsive">
  </div>
  
  <div class="col-md-3">
    <h3>Wim Van Cauteren</h3>
    <p>Wim is hulptrainer bij Alive 'n Kicking, hij studeerde lichamelijke opvoeding en sport te Parnas in Dilbeek</p>
    <p>Hij is al van zijn 7 jaar met vechtsport bezig, waaronder Judo, Kickboxing, Muay Thai,...</p>

    <a href="{{ url('/about-us/bio-wim') }}">Volledige biografie</a>
  </div>
</div>


@endsection