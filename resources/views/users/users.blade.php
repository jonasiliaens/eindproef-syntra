@extends('master')

@section('navbar')
  @include('partials.adminnavbar')
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Gebruikerslijst</h1>
		<hr>
	</div>
</div>

<div class="row">
  <div class="col-md-2">
    <strong>Naam:</strong>
  </div>

  <div class="col-md-2">
    <strong>Voornaam:</strong>
  </div>

  <div class="col-md-3">
    <strong>E-mail:</strong>
  </div>

  <div class="col-md-2">
    <strong>User Type:</strong>
  </div>
</div>

@foreach ($users as $user)
  <div class="row">
    <div class="col-md-2">
      {{ $user->lastname }}
    </div>

    <div class="col-md-2">
      {{ $user->name }}
    </div>

    <div class="col-md-3">
      {{ $user->email }}
    </div>

    <div class="col-md-2">
    @if ($user->user_type === 0)
      Admin
    @else
      Klant
    @endif
    </div>

    <div class="col-md-1">
      <a href="{{ URL::action('UsersController@edit', $user->id) }}">Bewerken</a>
      
      <a href="{{ url('/gebruiker/delete', $user->id) }}">Verwijderen</a>
    </div>

  </div>
  <div class="row">
    <div class="col-md-12">
      <hr>
    </div>
  </div>
@endforeach


@endsection