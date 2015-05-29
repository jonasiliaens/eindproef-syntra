@extends('master')

@section('navbar')
  @include('partials.adminnavbar')
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Product toevoegen</h1>
		<hr>
	</div>
</div>

@include('errors.list')

  {!! Form::open(['url' => 'producten', 'files'=>true]) !!}

    @include('products.form', ['submitbuttonText' => 'Product toevoegen'])

  {!! Form::close() !!}

@endsection

@section('script')
  <script>
    $("#category_id").prop("selectedIndex", -1);
    $('#category_id').select2({
      placeholder: 'Kies een categorie',
      allowClear: true
    });

    $("#brand_id").prop("selectedIndex", -1);
    $('#brand_id').select2({
      placeholder: 'Kies een merk',
      allowClear: true
    });

    $("#material_id").prop("selectedIndex", -1);
    $('#material_id').select2({
      placeholder: 'Kies een materiaal',
      allowClear: true
    });

    $('#size_list').select2({
      placeholder: 'Selecteer in welke maten het product beschikbaar is'
    });

    $('#color_list').select2({
      placeholder: 'Selecteer in welke kleuren het product beschikbaar is'
    });
  </script>
@endsection