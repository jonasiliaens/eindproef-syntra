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
        @foreach ($brands as $brand)
          <li>
                  <label>
                        <input type="checkbox" name="{{ $brand->brand }}"> {{ $brand->brand }}
                  </label>
          </li>
        @endforeach
      </ul>

      <p>Kleuren:</p>
      <ul>
        @foreach ($colors as $color)
          <li>
                  <label>
                        <input type="checkbox" name="{{ $color->color }}"> {{ $color->color }}
                  </label>
          </li>
        @endforeach
      </ul>

      <p>Maten:</p>
      <ul>
        @foreach ($sizes as $size)
          <li>
                  <label>
                        <input type="checkbox" name="{{ $size->size }}"> {{ $size->size }}
                  </label>
          </li>
        @endforeach
      </ul>
      
      <button type="submit" class="btn btn-primary knop">Filteren</button>                 
		</div>
	</div>

  @foreach ($products as $product)

	<div class="col-md-3 product">
      	<a href="{{ url('/producten', $product->id) }}"><img src="{{ $product->imagePath }}" alt="img"></a>
       	<div class="price"><p>€{{ $product->price }}</p></div>
        <a href="{{ url('/producten', $product->id) }}"><h4>{{ $product->name }}</h4></a>
       	<a href="{{ url('winkelmandje/add', $product->id) }}"><button type="submit" class="btn btn-primary knop">In Winkelmandje</button></a>
       	<hr>
	</div>
  
  @endforeach
		
</div>

@endsection