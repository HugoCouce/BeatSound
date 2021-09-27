<head>
    <title>BeatSound - Registro de pedidos</title>
    <link rel="icon" href="{{URL::asset('/images/BeatSoundLogoSimple.png')}}" type="image/icon type">
    @extends('layouts.app')
</head>
<?php
session_start();
?>
@section('content')

<div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h1 style="font-size:162px;">404</h1>
                <h2>Página no encontrada</h2>
                <p>Lo sentimos. La dirección web que has especificado no es una página activa de nuestra web.</p>
                <a href="/" class="btn btn-primary">Página principal</a>
            </div>
        </div>
    </div>
</div>
@endsection