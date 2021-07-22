<!DOCTYPE HTML>

<html lang="es">

<head>
	@include('head')
	<title>BeatSound - Registro</title>
	<link rel="icon" href="{{URL::asset('/images/BeatSoundLogoSimple.png')}}" type="image/icon type">
</head>

<body>

	<header>
		@include('nav')
	</header>

	<div>
		<form action="{{ url('/usuario') }}" method="post" enctype="multipart/form-data" class="row">
			@include('usuario.formulario', ['modo'=>'Crear'])
		</form>

	</div>

	<footer>
		@include('footer')
	</footer>

</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</html>