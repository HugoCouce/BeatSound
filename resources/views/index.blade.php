<head>
	<title>BeatSound - Life is music</title>
	<link rel="icon" href="{{URL::asset('/images/BeatSoundLogoSimple.png')}}" type="image/icon type">
	@extends('layouts.app')
</head>

@section('content')
<header class="masthead">
	<div class="">
		<div class="row align-items-center">
			<div class="col-12">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active" style="height: 500;">
							<img class="d-block w-100" src="{{URL::asset('/images/vinylHeader.jpg')}}" alt="First slide">
						</div>
						<div class="carousel-item" style="height: 500px;">
							<img class="d-block w-100" src="{{URL::asset('/images/vinylHeader.jpg')}}" alt="Second slide">
						</div>
						<div class="carousel-item" style="height: 500px;">
							<img class="d-block w-100" src="{{URL::asset('/images/vinylHeader.jpg')}}" alt="Third slide">
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

<hr width="80%"><br><br>

<!-- Three columns of text below the carousel -->
<div class="row d-flex align-items-center justify-content-center">
	<div class="col-lg-3 ">
		<img class="rounded-circle mx-auto d-block" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140"><br>
		<h2>Todos los productos</h2>
		<p>Duis mollis, est non commodo luctus, nisi erat porttitor
			ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus
			sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor
			mauris condimentum nibh.</p>
		<p><a class="btn btn-secondary" href="{{ url('/product/buy') }}" role="button">Mostrar »</a></p>
	</div><!-- /.col-lg-4 -->
	<div class="col-lg-3">
		<img class="rounded-circle mx-auto d-block" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140"><br>
		<h2>Vinilos</h2>
		<p>Duis mollis, est non commodo luctus, nisi erat porttitor
			ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus
			sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor
			mauris condimentum nibh.</p>
		<p><a class="btn btn-secondary" href="{{ url('/product/buy/vinyl') }}" role="button">Mostrar »</a></p>
	</div><!-- /.col-lg-4 -->
	<div class="col-lg-3">
		<img class="rounded-circle mx-auto d-block" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140"><br>
		<h2>CD´s</h2>
		<p>Duis mollis, est non commodo luctus, nisi erat porttitor
			ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus
			sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor
			mauris condimentum nibh.</p>
		<p><a class="btn btn-secondary" href="{{ url('/product/buy/cd') }}" role="button">Mostrar »</a></p>
	</div><!-- /.col-lg-4 -->
</div><!-- /.row -->
@endsection