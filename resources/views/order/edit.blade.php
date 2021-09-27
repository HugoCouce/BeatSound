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
                            <th>Pedido</th>
                            <th>Usuario</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>{{ $order->pedido_id }}</td>
                            <td>{{ $order->usuario_dni }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection