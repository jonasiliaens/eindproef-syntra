@extends('master')

@section('content')

<div class="row">
	<div class="col-md-6">
		<h1>Contactformulier</h1>
		<hr>
		<p>Had u graag wat meer informatie? Bel of stuur een mailtje, of vul ons contactformulier in.</p>
		<p>Gsm: <a href="tel:0498/34 30 28">0498/34 30 28</a></p>
		<p>Info: <a href="mailto:info@alive-n-kicking.be">info@alive-n-kicking.be</a></p>
		<hr>
		{!! Form::open(['url' => 'contact']) !!}
			<div class="form-group">
				{!! Form::label('email', 'E-mail:') !!}
				{!! Form::text('email', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('naam', 'Naam:') !!}
				{!! Form::text('naam', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('voornaam', 'Voornaam:') !!}
				{!! Form::text('voornaam', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('bericht', 'Bericht:') !!}
				{!! Form::textarea('bericht', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Verzenden', ['class' => 'btn btn-primary form-control knop']) !!}
			</div>
		{!! Form::close() !!}
	</div>

	<div class="col-md-6">
		<h1>Adressen</h1>
		<hr>
		<h3>Groepstrainingen</h3>
		<p>Liemingenstraat 11
		<br>
			3010 Kessel-Lo</p>

		<div id="map-canvas"></div>

		<h3>Privétrainingen</h3>
		<p>Geestbeek 38
		<br>
			3210 Lubbeek</p>

		<div id="map-canvas2"></div>
	</div>
</div>

@endsection

@section('maps')
<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
  		function initialize() {
    		var mapCanvas = document.getElementById('map-canvas');
    		var myLatlng = new google.maps.LatLng(50.9008945, 4.7325956);
    		var mapOptions = {
    		  		center: myLatlng,
    		  		zoom: 14,
    		  		mapTypeId: google.maps.MapTypeId.ROADMAP
    			}
    		var map = new google.maps.Map(mapCanvas, mapOptions);

    		var marker = new google.maps.Marker({
      			position: myLatlng,
      			map: map,
      			title: 'Hello World!'
  			});
  		}
  		google.maps.event.addDomListener(window, 'load', initialize);

  		function initialize2() {
    		var mapCanvas = document.getElementById('map-canvas2');
    		var myLatlng = new google.maps.LatLng(50.8969909, 4.8123925);
    		var mapOptions = {
    		  		center: myLatlng,
    		  		zoom: 14,
    		  		mapTypeId: google.maps.MapTypeId.ROADMAP
    			}
    		var map = new google.maps.Map(mapCanvas, mapOptions);

    		var marker = new google.maps.Marker({
      			position: myLatlng,
      			map: map,
      			title: 'Hello World!'
  			});
  		}
  		google.maps.event.addDomListener(window, 'load', initialize2);
	</script>
@endsection