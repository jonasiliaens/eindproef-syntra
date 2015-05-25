@extends('master')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('content')

<div class="row">
  <div class="col-md-12">
    <h1>Kidz Mix</h1>
    <hr>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <p>Deze trainingen zijn voor kinderen van 6 tot 14 jaar.</p>
    <p>Tijdens deze trainingen staat het kind centraal. We werken aan het welbevinden van het kind en 
    uiteraard aan de lichamelijke conditie.</p>
    <p>Zo zal het lichaamsbesef, de coördinatie, de kracht, de 
    lenigheid en de uithouding toenemen. Het kind zal dit als positief ervaren waardoor het zelfvertrouwen 
    zal toenemen.</p>
    <p>Tevens staat vechtsport gekend voor zijn strenge regels en discipline.
Het kind zal op een aangename manier leren wat beleefdheid, respect en discipline is.
Zo wordt er bijvoorbeeld van elk kind verwacht op tijd te zijn, zo niet zal hij/zij een opdrachtje krijgen.
We leren hen elkaar te respecteren in hun “zijn”, “kunnen” en “doen”.</p>
  </div>

  <div class="col-md-1">
  </div>

  <div class="col-md-7">
    <img src="{{ asset('/img/kidzmix1.jpg') }}" alt="" class="img-responsive kolombreedte">
    <p class="captionImg">Ons zaaltje te lubbeek waar de privétrainingen doorgaan.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <img src="{{ asset('/img/taekwondo.jpg') }}" alt="" class="img-responsive kolombreedte marginonder">
  </div>

  <div class="col-md-1">
  </div>

  <div class="col-md-7">
    <p>Tijdens de KIDZ MIX komt voornamelijk de vechtsport aan bod, afgewisseld met basis van Judo, Aïkido, 
    Tae Kwon Do, Kali Escrima, JKD, Shooto, Jujutsu, etc Zo leren de kinderen op een veilige manier vallen, worpen, trappen, stoten, etc.</p>
  </div>  
</div>





@endsection