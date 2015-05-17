<footer class="footer">
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-2 col-sm-2 col-xs-2">
                <ul>
                    <li><a href="{{ url('/producten') }}">Producten</a></li>
                    <li><a href="{{ url('/trainingen') }}">Trainingen</a></li>
                </ul>
    		</div>

            <div class="col-md-2 col-sm-2 col-xs-2">
                <ul>
                    <li><a href="{{ url('/about-us') }}">About Us</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>

        	<div class="col-md-4 col-sm-4 col-xs-4 text-center">
        		<p><a href="{{ url('/home') }}">&copy 2015 - Alive 'n Kicking</a></p>
        	</div>

        	<div class="col-md-4 col-sm-4 col-xs-4 text-center">
                <p>Become a fan: </p>
        		  <a href="https://www.facebook.com/pages/Alive-n-Kicking/479472582112397?ref=hl" target="_blank"><img src="{{ asset('/img/logo-fb.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</footer>