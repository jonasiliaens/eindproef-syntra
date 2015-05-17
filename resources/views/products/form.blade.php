<div class="col-md-6">
  <div class="form-group">
    {!! Form::label('name', 'Naam Product:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('description', 'Beschrijving:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('productimage', 'Afbeelding:') !!}
    {!! Form::file('productimage', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('price', 'Prijs:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-md-6">
  <div class="form-group">
    {!! Form::label('category_id', 'Categorie:') !!}
    {!! Form::select('category_id', $categories, null, ['id' => 'category_id', 'class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('brand_id', 'Merk:') !!}
    {!! Form::select('brand_id', $brands, null, ['id' => 'brand_id', 'class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('material_id', 'Materiaal:') !!}
    {!! Form::select('material_id', $materials, null, ['id' => 'material_id', 'class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('size_list', 'Beschikbare Maten:') !!}
    {!! Form::select('size_list[]', $sizes, null, ['id' => 'size_list', 'class' => 'form-control', 'multiple']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('color_list', 'Beschikbare Kleuren:') !!}
    {!! Form::select('color_list[]', $colors, null, ['id' => 'color_list', 'class' => 'form-control', 'multiple']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::submit($submitbuttonText, ['class' => 'btn btn-primary form-control knop']) !!}
</div>