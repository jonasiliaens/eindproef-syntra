@extends('master')

@section('content')

<div class="row">
  <div class="col-md-12">
    <h1>Muay Thai</h1>
    <hr>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <p>Muay Thai of Thaiboksen is een oude vechtsport die al eeuwen in Thailand wordt beoefend. Het thaiboksen
     is in Thailand de nationale sport en is zeer populair. Het huidige Muay Thai is indirect afkomstig uit de 
     gewapende vechtkunst Krabi Krabong.</p>
     <p>Muay betekent vechtkunst, Muay Thai betekent dus letterlijk Thaise vechtkunst.</p>
  </div>

  <div class="col-md-4">
    <img src="{{ asset('/img/krabikrabong.jpg') }}" alt="" class="img-responsive">
    <p class="captionImg">Krabi-krabong beoefenaars in Thailand</p>
  </div>

  <div class="col-md-4">
    <img src="{{ asset('/img/techniek3.jpg') }}" alt="" class="img-responsive">
  </div>
</div>

<div class="row">
  <div class="col-md-8">
    <img src="{{ asset('/img/landschap.jpg') }}" alt="" class="img-responsive">
  </div>

  <div class="col-md-4">
    <p>Bij Alive 'n Kicking maken we een verschil tussen de ringsport (Muay Thai) en de krijgskunst (Muay Boran).</p>
    <p>Bij de ringsport Muay Thai, waarin op het eerste gezicht alles lijkt te zijn toegestaan, is men wel degelijk gebonden aan regels. 
      Bij de ringsport is het toegestaan van vuisten, ellebogen, knieën en benen te gebruiken. </p>
  </div>
</div>




@endsection