<div class="container">
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/home') }}">Alive 'n Kicking</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="{{ url('/home') }}">Home</a></li>
				<li><a href="{{ url('/producten') }}">Producten</a></li>
				<li><a href="{{ url('/trainingen') }}">Trainingen</a></li>
				<li><a href="{{ url('/about-us') }}">About Us</a></li>
				<li><a href="{{ url('/contact') }}">Contact</a></li>
				@if (Auth::user()['user_type'] === 0)
					<li><a href="{{ url('/admin') }}">Admin</a></li>
				@endif
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ url('/winkelmandje') }}"><img src="{{ asset('/img/winkelwagen.png') }}" alt="" class="cart"> 0</a></li>
				@if (Auth::guest())
					<li><a href="{{ url('/auth/login') }}">Login</a></li>
					<li><a href="{{ url('/auth/register') }}">Registreer</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/profiel') }}">Profiel</a></li>
							<li><a href="{{ url('/auth/logout') }}">Uitloggen</a></li>
						</ul>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>
</div>