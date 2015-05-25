@extends('master')

@section('navbar')
  @include('partials.adminnavbar')
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Productenlijst</h1>
		<hr>
	</div>
</div>

<div class="row">
  <div class="col-md-2">
    <strong>Naam:</strong>
  </div>

  <div class="col-md-3">
    <strong>Beschrijving:</strong>
  </div>

  <div class="col-md-1">
    <strong>Prijs:</strong>
  </div>

  <div class="col-md-2">
    <strong>Categorie:</strong>
  </div>

  <div class="col-md-2">
    <strong>Merk:</strong>
  </div>

  <div class="col-md-1">
    <strong>Materiaal:</strong>
  </div>
</div>

@foreach ($products as $product)
  <div class="row">
    <div class="col-md-2">
      {{ $product->name }}
    </div>

    <div class="col-md-3">
      {{ $product->description }}
    </div>

    <div class="col-md-1">
      {{ $product->price }}
    </div>

    <div class="col-md-2">
      {{ $product->category->category }}
    </div>

    <div class="col-md-2">
      {{ $product->brand->brand }}
    </div>

    <div class="col-md-1">
      {{ $product->material->material }}
    </div>

    <div class="col-md-1">
      
        <a href="{{ URL::action('ProductsController@edit', $product->id) }}">Bewerken</a>
      
        <a href="{{ url('/producten/delete', $product->id) }}">Verwijderen</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <hr>
    </div>
  </div>
@endforeach


@endsection