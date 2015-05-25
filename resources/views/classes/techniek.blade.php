@extends('master')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('content')

<div class="row">
  <div class="col-md-12">
    <h1>Techniek</h1>
    <hr>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <img src="{{ asset('/img/techniek1.jpg') }}" alt="" class="img-responsive">
  </div>

  <div class="col-md-6">
    <p>Tijdens de trainingen techniek gaan we dieper in op de (basis)technieken van Muay Thai en Muay Boran. 
    Absoluut niet conditioneel maar wel essentieel voor een degelijke “groei” in de sport.</p>
  </div>
</div>




@endsection