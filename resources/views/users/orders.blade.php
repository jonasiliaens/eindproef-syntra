@extends('master')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Overzicht bestellingen van {{ $user->name }}</h1>
		<hr>
	</div>
</div>

@if (count($orders))
      
      @foreach($orders as $order)

            <h4>Bestelling van {{ $order->created_at }}</h4>
            <p>Totaalbedrag: {{ $order->total }} <br>
            Betaalstatus: <span class="state">@if($order->paid === 0) Nog niet betaald @else Betaald @endif</span> <br>
            Verzendtatus: <span class="state">@if($order->sent === 0) Nog niet verzonden @else Verzonden @endif</span></p>
            <h5>Producten:</h5>
                  <ul>
                  @foreach($order->products as $product)
                        <li>{{ $product->name }}</li>
                  @endforeach
                  </ul>

            <hr>
      @endforeach

@else
      <p>U heeft nog geen bestellingen. Neem een kijkje naar onze <a href="{{ url('/producten') }}">producten.</a></p>
@endif


  
  

@endsection