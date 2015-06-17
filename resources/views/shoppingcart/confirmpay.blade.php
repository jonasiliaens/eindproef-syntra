@extends('master')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Bestelling betalen</h1>
		<hr>
	</div>
</div>

<div class="row">
      <div class="col-md-12">
            <p>Gelieve {{ $order->total }} te betalen</p>
            <a href="{{ url('bestellingbetalen', $order->id) }}"><button type="submit" class="btn btn-primary knop">Betaal Nu</button></a>
      </div>
</div>
  
  

@endsection