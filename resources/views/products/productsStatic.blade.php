@extends('master')

@section('navbar')
  @include('partials.navbar')
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Producten</h1>
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-md-3">
		<h4>Filters</h4>
		<div class="filters checkbox">
            <p>Merken:</p>
			<ul>
                      <li>
                              <label>
                                    <input type="checkbox" name="twins"> Twins
                              </label>
                      </li>
                      <li>
                              <label>
                                    <input type="checkbox" name="windy"> Windy
                              </label>
                      </li>
                  </ul>

            <p>Kleuren:</p>
                  <ul>
                      <li>
                              <label>
                                    <input type="checkbox" name="zwart"> Zwart
                              </label>
                      </li>
                      <li>
                              <label>
                                    <input type="checkbox" name="rood"> Rood
                              </label>
                      </li>
                  </ul> 
            <button type="submit" class="btn btn-primary knop">Filteren</button>                 
		</div>
	</div>

	<div class="col-md-3 product">
      	<a href="{{ url('/producten/productid12') }}"><img src="img/products/retro_1.jpg" alt="img"></a>
       	<div class="price"><p>€92,50</p></div>
        <a href="{{ url('/producten/product/12') }}"><h4>Twins Retro Bokshandschoenen</h4></a>
       	<button type="submit" class="btn btn-primary knop">In Winkelmandje</button>
       	<hr>
       	<h4>Xprt No Fear Kickbox Broek Zwart</h4>
      	<img src="img/products/no-fear-zwart-kickbox-broek.jpg" alt="img">
       	<div class="price"><p>€39,95</p></div>
       	<button type="submit" class="btn btn-primary knop">In Winkelmandje</button>
       	<hr>
       	<h4>Booster BTSG-3 Scheenbeschermers</h4>
      	<img src="img/products/boosterbtsg3.jpg" alt="img">
       	<div class="price"><p>€68,50</p></div>
       	<button type="submit" class="btn btn-primary knop">In Winkelmandje</button>
        <hr>
	</div>

	<div class="col-md-3 product">
      	<img src="img/products/twins-red-splatter_667.jpg" alt="img">
       	<div class="price"><p>€115,50</p></div>
        <h4>Twins Red Splatter Bokshandschoenen</h4>
       	<button type="submit" class="btn btn-primary knop">In Winkelmandje</button>
       	<hr>
       	<h4>Xprt Muay Thai Kickbox Broek Groen</h4>
      	<img src="img/products/xprt-groen-kickbox-broekje667.jpg" alt="img">
       	<div class="price"><p>€39,95</p></div>
       	<button type="submit" class="btn btn-primary knop">In Winkelmandje</button>
       	<hr>
       	<h4>Booster Pro Range Zwart/Rood</h4>
      	<img src="img/products/bsg_2_black-red_foil.jpg" alt="img">
       	<div class="price"><p>€91</p></div>
       	<button type="submit" class="btn btn-primary knop">In Winkelmandje</button>
        <hr>
	</div>

	<div class="col-md-3 product">
      	<img src="img/products/twins-bokshandschoenen-thunderbolt667.jpg" alt="img">
       	<div class="price"><p>€115,50</p></div>
        <h4>Twins Thunderbolt Bokshandschoenen</h4>
       	<button type="submit" class="btn btn-primary knop">In Winkelmandje</button>
       	<hr>
       	<h4>Xprt Muay Thai Kickbox Broek Tribalroze</h4>
      	<img src="img/products/tribalroze667.jpg" alt="img">
       	<div class="price"><p>€39,95</p></div>
       	<button type="submit" class="btn btn-primary knop">In Winkelmandje</button>
       	<hr>
       	<h4>Booster Pro Range Zwart/Blauw</h4>
      	<img src="img/products/bsg_1_black-blue_foil.jpg" alt="img">
       	<div class="price"><p>€91</p></div>
       	<button type="submit" class="btn btn-primary knop">In Winkelmandje</button>
        <hr>
	</div>
    
		
</div>

@endsection