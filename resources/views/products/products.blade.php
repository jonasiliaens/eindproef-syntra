@extends('master')

@section('navbar')
  @include('partials.navbar')
@endsection

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

  @foreach ($products as $product)

	<div class="col-md-3 product">
      	<a href="#"><img src="{{ $product->imagePath }}" alt="img"></a>
       	<div class="price"><p>{{ $product->price }}</p></div>
        <a href="{{ url('/producten/product/12') }}"><h4>{{ $product->name }}</h4></a>
       	<button type="submit" class="btn btn-primary knop">In Winkelmandje</button>
       	<hr>
	</div>
  
  @endforeach
		
</div>

@endsection