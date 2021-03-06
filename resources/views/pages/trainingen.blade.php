@extends('master')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('content')

<div class="row">
  <div class="col-md-12">
    <h1>Trainingen</h1>
    <hr>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    
  </div>
</div>

<div class="row">
<div class="col-md-6 col-sm-12 col-xs-12">
  <h2>Groepslessen</h2>
  <p>Onze groepslessen gaan wekelijks door op volgende dagen:</p>
  <div class="col-md-6 col-sm-6 col-xs-6">
    <h3>Maandag:</h3>
    <ul class="uurrooster">
        <li>18u00 - 19u00
          <ul>
              <li><a href="{{ url('/trainingen/kidz-mix') }}">Kidz Mix</a></li>
          </ul>
        </li>
        <li>19u00 - 20u15
          <ul>
              <li><a href="{{ url('/trainingen/condition') }}">Condition Class</a></li>
          </ul>
        </li>
        <li>20u15 - 21u30
          <ul>
              <li><a href="{{ url('/trainingen/muaythai') }}">Start 2 Kick - Muay Thai</a></li>
          </ul>
        </li>
    </ul>
  </div>

  <div class="col-md-6 col-sm-6 col-xs-6">
    <h3>Woensdag:</h3>
    <ul class="uurrooster">
        <li>18u00 - 19u00
          <ul>
              <li><a href="{{ url('/trainingen/kidz-mix') }}">Kidz Mix</a></li>
          </ul>
        </li>
        <li>19u00 - 20u00
          <ul>
              <li><a href="{{ url('/trainingen/techniek') }}">Techniek Class</a></li>
          </ul>
        </li>
        <li>20u00 - 21u30
          <ul>
              <li><a href="{{ url('/trainingen/muaythai') }}">Muay Thai</a></li>
          </ul>
        </li>
    </ul>
  </div>
    <img src="{{ asset('/img/techniek3.jpg') }}" alt="img" class="img-responsive">
    <p class="captionImg">Techniektraining.</p>

</div>

  <div class="col-md-6">
    <h2>Privétraining</h2>

    <p>U kan bij Alive 'n Kicking ook <a href="{{ url('/trainingen/privétraining') }}">privétraining</a> volgen in onze sportzaal te Lubbeek.</p> 
    <p>Tijdens de privé trainingen staat de sporter centraal. Dit kan best vergeleken worden met een Personal Coach die one-on-one trainingen geeft.</p>
    <p>U kan een afspraak maken voor een privéles op onze <a href="{{ url('/contact') }}">contactpagina</a>.</p>


    <img src="{{ asset('/img/privezaal.jpg') }}" alt="img" class="img-responsive">
    <p class="captionImg">Ons zaaltje te lubbeek waar de privétrainingen doorgaan.</p>


  </div>
</div>

<div class="row">

  
</div>


@endsection