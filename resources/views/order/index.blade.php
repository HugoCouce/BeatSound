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
    <div class="">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">{{ __('Registro de pedidos') }}
                    </div>
                    <table class="card-table table table-light text-center">
                        <thead class="thead-light">
                            <tr>
                                <th>Pedido</th>
                                <th>Usuario</th>
                                <th>Información pedido</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach( $orders as $order)
                            <tr>
                                <td>{{ $order->pedido_id }}</td>
                                <td>{{ $order->usuario_dni }}</td>
                                <td>
                                    <div class="btn-group d-flex" role="group">
                                        <a class="btn btn-link" href="{{ url('/order/'.$order->pedido_id) }}" role="button">
                                            Mostrar pedido
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection