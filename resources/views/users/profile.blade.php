@extends('master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Profiel van {{ $user->name }}</h1>
    <hr>
	</div>
</div>

{!! Form::model($user, ['method' => 'PATCH', 'action' => ['ProfileController@update', $user->id]]) !!}

<div class="row">
  <div class="col-md-3">
        <div class="form-group">
          {!! Form::label('name', 'Voornaam:') !!}
          {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>    
  </div>

  <div class="col-md-3">
    <div class="form-group">
      {!! Form::label('lastname', 'Achternaam:') !!}
      {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
        <div class="form-group">
          {!! Form::label('street', 'Straat:') !!}
          {!! Form::text('street', null, ['class' => 'form-control']) !!}
        </div>    
  </div>
</div>


<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      {!! Form::submit('Bewaren', ['class' => 'btn btn-primary form-control knop']) !!}
    </div>
  </div>
</div>



{!! Form::close() !!}

@endsection

<!-- <div class="row">
  <div class="col-md-">
    
  </div>
</div> -->