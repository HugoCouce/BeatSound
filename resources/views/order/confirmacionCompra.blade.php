<head>
    <title>BeatSound - Carrito</title>
    <link rel="icon" href="{{URL::asset('/images/BeatSoundLogoSimple.png')}}" type="image/icon type">
    @extends('layouts.app')
</head>
<?php
session_start();
session_destroy();
?>
@section('content')
<br><br><br><br>
<div class="text-center">
    <img src="{{URL::asset('/images/compraExito.png')}}" alt="Confirmaciónd de compra">
    <h1>Tu compra ha sido realizada con éxito</h1><br>
    <a href="{{ url('/product/buy') }}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Volver a la tienda</a>
</div>
@endsection