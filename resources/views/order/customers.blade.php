<head>
    <title>BeatSound - Información del pedido</title>
    <link rel="icon" href="{{URL::asset('/images/BeatSoundLogoSimple.png')}}" type="image/icon type">
    @extends('layouts.app')
</head>
<?php
session_start();
?>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Información del pedido') }}
                </div>
                <table class="card-table table table-light text-center">
                    <thead class="thead-light">
                        <tr>
                            <th>Nombre álbum</th>
                            <th>Cantidad</th>
                            <th>Precio total</th>
                            <th>Fecha de compra</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach( $datos as $dato)
                        <tr>
                            <td>{{ $dato->nombre_album }}</td>
                            <td>{{ $dato->cantidad }}</td>
                            <td>{{ $dato->precio_total }}€</td>
                            <td>{{ $dato->fecha_compra }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection