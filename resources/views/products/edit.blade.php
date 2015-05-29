@extends('master')

@section('navbar')
  @include('partials.adminnavbar')
@endsection

@section('content')

<div class="row">
  <div class="col-md-12">
    <h1>Product wijzigen</h1>
    <hr>
  </div>
</div>

@include('errors.list')

  {!! Form::model($product, ['method' => 'PATCH', 'action' => ['ProductsController@update', $product->id]]) !!}

    @include('products.form', ['submitbuttonText' => 'Product wijzigen'])

  {!! Form::close() !!}

@endsection

@section('script')
  <script>
    $('#category_id').select2({
      placeholder: 'Kies een categorie',
      allowClear: true
    });

    $('#brand_id').select2({
      placeholder: 'Kies een merk',
      allowClear: true
    });

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
