<div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="item active">
    		<img src="img/carousel/carousel1.jpg" alt="">
    		<div class="container">
      		<div class="carousel-caption">
        			<h1>Welkom</h1>
        			<p class="lead">Alive ’n Kicking is een zelfstandige sportschool waar je op een veilige manier vechtsport kan beoefenen.</p>
      		</div>
    		</div>
    </div>

    <div class="item">
      	<img src="img/carousel/carousel2.jpg" alt="">
      	<div class="container">
        	<div class="carousel-caption">
        	  	<h1>Webwinkel</h1>
        	  	<p class="lead">Tevens bieden wij u de mogelijkheid om op onze website het benodigde materiaal aan te schaffen.</p>
        	</div>
      	</div>
    </div>

    <div class="item">
      	<img src="img/carousel/carousel3.jpg" alt="">
      	<div class="container">
        	<div class="carousel-caption">
          		<h1>Bereik je doel</h1>
          		<p class="lead">Onze ervaren en gediplomeerde trainers zullen je begeleiden om je doel te bereiken, wat je doel ook mag zijn.</p>
        	</div>
      	</div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

@section('autoplayacrousel')
<script>
  $(function(){
      $('.carousel').carousel({
        interval: 8000
      });
  });
</script>
@endsection