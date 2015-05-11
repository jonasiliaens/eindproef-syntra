@extends('master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Producten</h1>
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-md-3">
		<h4>Filters</h4>
		<div class="filters checkbox">
            <p>Merken:</p>
			<ul>
                      <li>
                              <label>
                                    <input type="checkbox" name="twins"> Twins
                              </label>
                      </li>
                      <li>
                              <label>
                                    <input type="checkbox" name="windy"> Windy
                              </label>
                      </li>
                  </ul>

            <p>Kleuren:</p>
                  <ul>
                      <li>
                              <label>
                                    <input type="checkbox" name="zwart"> Zwart
                              </label>
                      </li>
                      <li>
                              <label>
                                    <input type="checkbox" name="rood"> Rood
                              </label>
                      </li>
                  </ul> 
            <button type="submit" class="btn btn-primary knop">Filteren</button>                 
		</div>
	</div>

  <div class="col-md-3">
    <img src="{{ asset('/img/products/retro_1.jpg') }}" alt="img" class="img-responsive">
    <div class="price"><p>€92,50</p></div>
    <img src="{{ asset('/img/products/retro_1.jpg') }}" alt="img" class="thumb">
    <img src="{{ asset('/img/products/retro_1.jpg') }}" alt="img" class="thumb">
    <img src="{{ asset('/img/products/retro_1.jpg') }}" alt="img" class="thumb">

  </div>

	<div class="col-md-6 product">
      	
       	
        <h4>Twins Retro Bokshandschoenen</h4>
        <p>Terug in de tijd met deze Twins Retro Bokshandschoenen. Althans, qua uiterlijk, want deze echt leren 
        bokshandschoen voldoet aan alle eisen van de veeleisende bokser of kickbokser. Deze bokshandschoenen van T
        wins hebben een uitstekende pasvorm en zorgen voor extra stevigheid bij de pols door de stevige velcro 
        sluiting.</p>
        <p>Specificaties:</p>
        <ul>
            <li>Merk: Twins</li>
            <li>Materiaal: Leer</li>
            <li>Kleur: Bruin</li>
            <li>Gewicht: 10 oz</li>
        </ul>
       	<button type="submit" class="btn btn-primary knop">In Winkelmandje</button>
	</div>

	
		
</div>

@endsection