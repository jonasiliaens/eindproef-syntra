@extends('master')

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
    $('#size_list').select2({
      placeholder: 'Selecteer in welke maten het product beschikbaar is'
    });

    $('#color_list').select2({
      placeholder: 'Selecteer in welke kleuren het product beschikbaar is'
    });
  </script>
@endsection
