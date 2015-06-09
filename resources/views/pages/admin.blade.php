@extends('master')

@section('navbar')
  @include('partials.adminnavbar')
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Admin</h1>
    <hr>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<h2>Producten Beheren:</h2>
		<a href="{{ url('/producten/create') }}"><button type="submit" class="btn btn-primary knop">Product toevoegen</button></a>
		<a href="{{ url('/productlist') }}"><button type="submit" class="btn btn-primary knop">Producten wijzigen/verwijderen</button></a>
	</div>

	<div class="col-md-6">
		<h2>Gebruikers Beheren:</h2>
		<a href="{{ url('/gebruikers') }}"><button type="submit" class="btn btn-primary knop">Gebruikers wijzigen/verwijderen</button></a>
	</div>
</div>



<div class="row">
	<div class="col-md-6">
		<h3>Productspecificaties Beheren:</h3>
		<a href="{{ url('/specifications') }}"><button type="submit" class="btn btn-primary knop">Specificatie toevoegen</button></a>
		<a href="{{ url('/productlist') }}"><button type="submit" class="btn btn-primary knop">Specificatie wijzigen/verwijderen</button></a>
	</div>
	<div class="col-md-6">
		<h2>Bestellingen Opvolgen:</h2>
		<button type="submit" class="btn btn-primary knop">Overzicht bestellingen</button>
	</div>
</div>

@endsection