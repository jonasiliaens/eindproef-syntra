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
	<div class="col-md-2">
		
	</div>

  <div class="col-md-3">
    <img src="{{ $product->imagePath }}" alt="img" class="img-responsive">
    <div class="price"><p>€{{ $product->price }}</p></div>
  </div>

	<div class="col-md-6 product">
        <h4>{{ $product->name }}</h4>
        <p>{{ $product->description }}</p>
        <p>Specificaties:</p>
        <ul>
            <li>Merk: {{ $product->brand->brand }}</li>
            <li>Materiaal: {{ $product->material->material }}</li>
            <li>Beschikbare Kleuren:
              <ul>
                @foreach ($product->colors as $color)
                  <li>{{ $color->color }}</li>
                @endforeach
              </ul>
            </li>
            <li>Beschikbare Maten:
              <ul>
                @foreach ($product->sizes as $size)
                  <li>{{ $size->size }}</li>
                @endforeach
              </ul>
            </li>
        </ul>
       	<a href="{{ url('winkelmandje/add', $product->id) }}"><button type="submit" class="btn btn-primary knop">In Winkelmandje</button></a>
        <hr>
	</div>	
		
</div>

@endsection