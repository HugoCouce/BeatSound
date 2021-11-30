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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-8 justify-content-center">
                    <img class="d-block w-8 justify-content-center" src="{{URL::asset('/images/compraExito.png')}}" alt="Confirmaciónd de compra">
                    <h1>Tu compra ha sido realizada con éxito</h1>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection