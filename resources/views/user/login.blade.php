<!DOCTYPE HTML>

<html lang="es">

<head>
	@include('head')
	<title>BeatSound - Acceso</title>
	<link rel="icon" href="{{URL::asset('/images/BeatSoundLogoSimple.png')}}" type="image/icon type">
</head>

<body>

	<header>
		@include('nav')
	</header>

	<div>
		@include('/user/contenidoLogin')
	</div>

	<footer>
		@include('footer')
	</footer>

</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</html>