<head>
	<title>BeatSound - Life is music</title>
	<link rel="icon" href="{{URL::asset('/images/BeatSoundLogoSimple.png')}}" type="image/icon type">
	@extends('layouts.app')
</head>

@section('content')
<header class="masthead"><br><br>

	<div class="">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="col-lg-9">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="{{URL::asset('/images/carrusel01.jpg')}}" alt="First slide">
							<div class="carousel-caption">
								<h3>Pregunta sin miedo. Te conseguimos la música que necesites</h3>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="{{URL::asset('/images/carrusel02.jpg')}}" alt="Second slide">
							<div class="carousel-caption">
								<h3>Disfruta de tu música cuando quieras y como quieras</h3>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</header><br><br>
<?php
session_start();
?>

<hr width="80%"><br><br>

<div class="row d-flex align-items-center justify-content-center">
	<div class="col-lg-3">
		<h2>Estamos aquí para ayudarte</h2>
		<p>No tengas miedo en preguntarnos por nuevos grupos o géneros musicales que vayan contigo.</p>
		<p>Estamos encantados de ayudarte a descubrir nuevos horizontes para que disfrutes aún más de la música.</p>
	</div>

	<div class="col-lg-3">
		<img class="d-block w-100" src="{{URL::asset('/images/asesoramiento.jpg')}}" alt="Asesoramiento personalizado">
	</div>
</div><br><br>

<hr width="80%"><br><br>

<div class="row d-flex align-items-center justify-content-center">
	<div class="col-lg-3">
		<img class="d-block w-100" src="{{URL::asset('/images/ejemploCliente.jpg')}}" alt="Imagen de un cliente">
	</div>

	<div class="col-lg-3">
		<h2>Hacednos llegar vuestras fotos</h2>
		<p>Muchas gracias a todos por mandarnos las fotos de vuestros pedidos o colección.</p>
		<p>Es un placer ayudaros y aconsejaros para encontrar la música que tanto os gusta.</p>
	</div>
</div><br><br>

<hr width="80%"><br><br>



<!-- Three columns of text below the carousel -->
<div class="row d-flex align-items-center justify-content-center">
	<div class="col-lg-3 ">
		<img class="rounded mx-auto d-block" src="{{URL::asset('/images/vinyl&cd.png')}}" alt="VinylShortcut" width="140" height="140"><br>
		<h2>Todos los productos</h2>
		<p>Todos nuestros productos a tu disposición. Pregunta si no ves lo que quieres y nosotros lo conseguimos para ti.</p>
		<p><a class="btn btn-secondary" href="{{ url('/product/buy') }}" role="button">Mostrar »</a></p>
	</div><!-- /.col-lg-4 -->
	<div class="col-lg-3">
		<img class="rounded-circle mx-auto d-block" src="{{URL::asset('/images/vinyl.jpg')}}" alt="VinylShortcut" width="140" height="140"><br>
		<h2>Vinilos</h2>
		<p>Disfruta de tus vinilos favoritos con la máxima calidad sonora en tu equipo de alta fidelidad. </p>
		<p><a class="btn btn-secondary" href="{{ url('/product/buy/vinyl') }}" role="button">Mostrar »</a></p>
	</div><!-- /.col-lg-4 -->
	<div class="col-lg-3">
		<img class="rounded-circle mx-auto d-block" src="{{URL::asset('/images/cd.jpg')}}" alt="CdShortcut" width="140" height="140"><br>
		<h2>CD´s</h2>
		<p>Consigue los álbumes de tus artistas favoritos al mejor precio y aumenta el volumen de tu colección.</p>
		<p><a class="btn btn-secondary" href="{{ url('/product/buy/cd') }}" role="button">Mostrar »</a></p>
	</div><!-- /.col-lg-4 -->
</div><!-- /.row -->
@endsection