@extends('master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Product toevoegen</h1>
		<hr>
	</div>
</div>

@include('errors.list')

<div class="col-md-6">
  {!! Form::open(['url' => 'producten']) !!}
    <div class="form-group">
      {!! Form::label('name', 'Naam Product:') !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('description', 'Beschrijving:') !!}
      {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('imagePath', 'Afbeelding:') !!}
      {!! Form::text('imagePath', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('price', 'Prijs:') !!}
      {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Product Opslaan', ['class' => 'btn btn-primary form-control knop']) !!}
    </div>
  {!! Form::close() !!}
</div>

@endsection

@section('flashscript')
  <script>
    $('div.alert').not('.alert-important').delay(4000).slideUp(300);
  </script>
@endsection