<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="/"><img src="{{URL::asset('/images/BeatSoundLogo.png')}}" alt="logo"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="/">Inicio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ url('user/login') }}">Acceso usuarios</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ url('user/create') }}">Registro</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Productos
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">CD</a>
					<a class="dropdown-item" href="#">Vinilo</a>
				</div>
			</li>
		</ul>
	</div>
</nav>