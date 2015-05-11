@extends('master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Admin</h1>
    <hr>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<h2>Producten Aanpassen:</h2>
		<button type="submit" class="btn btn-primary knop">Producten toevoegen</button>
		<button type="submit" class="btn btn-primary knop">Producten wijzigen/verwijderen</button>
	</div>

	<div class="col-md-6">
		<h2>Gebruikers Aanpassen:</h2>
		<button type="submit" class="btn btn-primary knop">Gebruikers wijzigen/verwijderen</button>
	</div>
</div>



<div class="row">
	<div class="col-md-6">
		<h2>Bestellingen Opvolgen:</h2>
		<button type="submit" class="btn btn-primary knop">Overzicht bestellingen</button>
	</div>
</div>

@endsection