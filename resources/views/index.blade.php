<!DOCTYPE HTML>

<html lang="es">

<head>
	@include('head')
	<title>BeatSound - Life is music</title>
	<link rel="icon" href="{{URL::asset('/images/BeatSoundLogoSimple.png')}}" type="image/icon type">
</head>

<body>

	<header>
		@include('nav')
	</header>

	<div>
		<img style="display: block;
			margin-left: auto;
			margin-right: auto;" src="https://static.fnac-static.com/multimedia/Images/FR/NR/68/26/d0/13641320/1540-1/tsp20210701133213/Sounds-From-The-Ancestors.jpg">
	</div>

	<footer>
		@include('footer')
	</footer>

</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</html>