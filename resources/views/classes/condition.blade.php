@extends('master')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('content')

<div class="row">
  <div class="col-md-12">
    <h1>Conditie training</h1>
    <hr>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <img src="{{ asset('/img/class4.jpg') }}" alt="" class="img-responsive">
    <p>Conditietraining is niet alleen goed om het algemene uithoudingsvermogen te verbeteren maar voor nog veel meer:</p>
    <ul>
        <li>Hart- en bloedvaten</li>
        <li>Versterking van het immuunsysteem</li>
        <li>Een betere conditie en een hoger prestatievermogen</li>
        <li>Verbetering van het denkvermogen en de creativiteit</li>
        <li>Stimulatie van de vetverbranding</li>
        <li>Meer plezier in het leven</li>
        <li>Verbetering van de slaapkwaliteit</li>
        <li>Vertraging van het verouderingsproces</li>
        <li>Verminderde kans op depressie en stress</li>
        <li>Meer longvolume</li>
        <li>...</li>
    </ul>
  </div>

  <div class="col-md-6">
    <p>Deze trainingen zijn geschikt voor alle conditionele en technische niveaus.</p>
    <p>Tijdens deze les staat conditietraining centraal. Niet enkel boksen en trappen maar ook 
    cross trainingen, insanity trainingen en nog veel meer.</p>
    <p>Gewoonweg: afzien!</p>
    <img src="{{ asset('/img/insanity.jpg') }}" alt="" class="img-responsive">
  </div>
</div>




@endsection