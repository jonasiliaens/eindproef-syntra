@extends('master')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Winkelmandje van {{ $user->name }}</h1>
		<hr>
	</div>
</div>

@if (count($order))

{!! Form::open(['url' => 'bestellingfinaliseren']) !!}

<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="basket">
                  <h3>Producten:</h3>
                  <table>
                        <thead>
                              <tr>
                                    <th>Beschrijving Product:</th>        
                                    <th>Aantal:</th>
                                    <th>Prijs/stuk:</th>
                                    <th>Totaal:</th>
                                    <th>Maat:</th>
                                    <th>kleur:</th>
                                    <th><a href="{{ url('/winkelmandje/delete/all') }}">Wis Alle</a></th>
                              </tr>
                        </thead>

                        <tbody>
                        @foreach ($products as $product)
                              <tr>
                                    <td class="despro">{{ $product->name }}</td>
                                    <td class="countpro">1</td>
                                    <td class="pricepro">€{{ $product->price }}</td>
                                    <td class="pricepro">€{{ $product->price }}</td>
                                    <td>{!! Form::select('size_id', $product->sizes()->lists('size'), null, ['id' => 'size_id', 'class' => 'form-control']) !!}</td>
                                    <td>{!! Form::select('color_id', $product->colors()->lists('color'), null, ['id' => 'color_id', 'class' => 'form-control']) !!}</td>
                                    <td><a href="{{ url('/winkelmandje/delete', $product->id) }}">Wis</a></td>
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
                  
                  <button type="submit" class="btn btn-primary knop">Bestelling Finaliseren</button>

      </div>
</div>

{!! Form::close() !!}

@else
      <p>U heeft nog geen producten in uw winkelmandje. Neem een kijkje naar onze <a href="{{ url('/producten') }}">producten.</a></p>
@endif


  
  

@endsection