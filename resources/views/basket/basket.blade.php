@extends('master')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Winkelmandje</h1>
		<hr>
	</div>
</div>

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
                              </tr>
                        </thead>

                        <tbody>
                              <tr>
                                    <td class="despro">Twins Retro Bokshandschoenen</td>
                                    <td class="countpro">2</td>
                                    <td class="pricepro">€92,50</td>
                                    <td class="pricepro">€185</td>
                              </tr>
                              <tr>
                                    <td>Booster Pro Range Zwart/Rood</td>
                                    <td class="countpro">1</td>
                                    <td class="pricepro">€91</td>
                                    <td class="pricepro">€91</td>
                              </tr>
                        </tbody>

                        <tfoot>
                              <tr>
                                    <th>Totaal Bestelling:</th>
                                    <th></th>
                                    <th></th>
                                    <th class="pricepro">€276</th>
                              </tr>
                        </tfoot>
                  </table>
            </div>
            <a href="{{ url('/bestellingfinaliseren') }}">
                  <button type="submit" class="btn btn-primary knop">Bestelling Finaliseren</button>
            </a>
      </div>
</div>



@endsection