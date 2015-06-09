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

{!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsersController@update', $user->id]]) !!}

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