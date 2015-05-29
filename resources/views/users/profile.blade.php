@extends('master')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Profiel van {{ $user->name }}</h1>
    <hr>
	</div>
</div>

@include('errors.list')

{!! Form::model($user, ['method' => 'PATCH', 'action' => ['ProfileController@update', $user->id]]) !!}

<div class="row">
  <div class="col-md-4">
        <div class="form-group">
          {!! Form::label('name', 'Voornaam:') !!}
          {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>    
  </div>

  <div class="col-md-4">
    <div class="form-group">
      {!! Form::label('lastname', 'Achternaam:') !!}
      {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
        <div class="form-group">
          {!! Form::label('address[street]', 'Straat:') !!}
          {!! Form::text('address[street]', null, ['class' => 'form-control']) !!}
        </div>    
  </div>

  <div class="col-md-2">
        <div class="form-group">
          {!! Form::label('address[number]', 'Nummer:') !!}
          {!! Form::text('address[number]', null, ['class' => 'form-control']) !!}
        </div>    
  </div>

  <div class="col-md-2">
        <div class="form-group">
          {!! Form::label('address[box]', 'Bus:') !!}
          {!! Form::text('address[box]', null, ['class' => 'form-control']) !!}
        </div>    
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::label('address[town_id]', 'Postcode en gemeente:') !!}
      {!! Form::select('address[town_id]', $towns, null, ['id' => 'town_id', 'class' => 'form-control']) !!}
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
      {!! Form::label('address[country_id]', 'Land:') !!}
      {!! Form::select('address[country_id]', $countries, null, ['id' => 'country_id', 'class' => 'form-control']) !!}
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::submit('Bewaren', ['class' => 'btn btn-primary form-control knop']) !!}
    </div>
  </div>
</div>


@endsection

@section('script')
  <script>
    $('#town_id').select2({
      placeholder: 'Kies een postcode en gemeente',
      allowClear: true
    });

    $('#country_id').select2({
      placeholder: 'Kies een land',
      allowClear: true
    });

  </script>
@endsection