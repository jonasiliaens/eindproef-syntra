@extends('master')

@section('navbar')
  @include('partials.adminnavbar')
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Specificaties toevoegen</h1>
		<hr>
	</div>
</div>

@include('errors.list')

<div class="row">
  <div class="col-md-2">
  <a href="{{ url('/specifications/categories') }}">{!! Form::button('Categorieen', ['class' => 'btn btn-primary form-control knop']) !!}</a>
  </div>

  <div class="col-md-2">
    <a href="{{ url('/specifications/brands') }}">{!! Form::button('Merken', ['class' => 'btn btn-primary form-control knop']) !!}</a>
  </div>

  <div class="col-md-2">
    <a href="{{ url('/specifications/materials') }}">{!! Form::button('Materialen', ['class' => 'btn btn-primary form-control knop']) !!}</a>
  </div>

  <div class="col-md-2">
    <a href="{{ url('/specifications/sizes') }}">{!! Form::button('Maaten', ['class' => 'btn btn-primary form-control knop']) !!}</a>
  </div>

  <div class="col-md-2">
    <a href="{{ url('/specifications/colors') }}">{!! Form::button('Kleuren', ['class' => 'btn btn-primary form-control knop']) !!}</a>
  </div>
</div>
  

  

  

 

@endsection
