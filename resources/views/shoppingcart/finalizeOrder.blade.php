@extends('master')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Bestelling finaliseren</h1>
		<hr>
	</div>
</div>

<div class="row">
      <div class="col-md-12">
            <h3>Overzicht gegevens:</h3>
            <hr>
      </div>
</div>

<div class="row">
      <div class="col-md-6">
            <h4>Persoonsgegevens:</h4>
            <p>{{ $user->name }} {{ $user->lastname }}</p>

            <h4>Adresgegevens:</h4>
            @if ($user->street)
                  <p>{{ $user->street }} {{ $user->number }} @if($user->box) bus {{ $user->box }} @endif <br>
                       {{ $user->town->postcode }} {{ $user->town->town }}<br>
                       {{ $user->country->country }}</p>
            @else
                  <span class="warning"><p>Opgelet! uw gegevens zijn niet volledig! Gelieve deze te <a href="{{ url('/profiel') }}">vervolledigen</a>, anders kan u uw bestelling niet afronden!</p></span>
            @endif

            <a href="{{ url('/profiel') }}"><button type="submit" class="btn btn-primary knop">Gegevens Wijzigen</button></a>
      </div>
</div>

<div class="row">
      <div class="col-md-12">
            <h3>Overzicht producten:</h3>
            <hr>
      </div>
</div>

<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
            <div>
                  <table>
                        <thead>
                              <tr>
                                    <th>Beschrijving Product:</th>        
                                    <th>Aantal:</th>
                                    <th>Prijs/stuk:</th>
                                    <th>Totaal:</th>
                                    <th>Maat:</th>
                                    <th>kleur:</th>
                              </tr>
                        </thead>

                        <tbody>
                        @foreach ($products as $product)
                              <tr>
                                    <td class="despro">{{ $product->name }}</td>
                                    <td class="countpro">1</td>
                                    <td class="pricepro">€{{ $product->price }}</td>
                                    <td class="pricepro">€{{ $product->price }}</td>
                                    <td></td>
                                    <td></td>
                              </tr>
                        @endforeach
                        </tbody>

                        <tfoot>
                              <tr>
                                    <th>Totaal Bestelling:</th>
                                    <th></th>
                                    <th></th>
                                    <th class="pricepro">€{{ $order->total }}</th>
                              </tr>
                        </tfoot>
                  </table>
            </div>
                        
            <a href="{{ url('terugnaarwinkelmandje', $order->id) }}"><button type="submit" class="btn btn-primary knop">Terug Naar Winkelmandje</button></a>

      </div>
</div>

<div class="row">
      <div class="col-md-12">
            @if ($user->street)
                  <a href="{{ url('betalingbevestigen', $order->id) }}"><button type="submit" class="btn btn-primary knop">Betalen</button></a>
            @else
                  <span class="warning"><p>Opgelet! uw gegevens zijn niet volledig! Gelieve deze te vervolledigen, anders kan u uw bestelling niet afronden!</p></span>
            @endif
      </div>
</div>



  
  

@endsection