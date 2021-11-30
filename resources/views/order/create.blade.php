<head>
    <title>BeatSound - Carrito</title>
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
                <div class="card-header">{{ __('Carrito') }}</div>
                @if(isset($_POST['btnBorrarElementoCarrito']))
                <?php
                $posicion = $_POST['id'];
                unset($_SESSION['carrito'][$posicion]);
                $_SESSION['carrito'] = array_values($_SESSION["carrito"]);
                ?>
                @endif
                <!-- Validamos que hay algo en la sesión -->
                <?php
                $total = 0;
                if (!empty($_SESSION['carrito'])) {
                ?>
                    <table class="card-table table table-light text-center">
                        <thead class="thead-light">
                            <tr>
                                <th>Artista</th>
                                <th>Albúm</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($_SESSION['carrito'] as $indice=>$producto)
                            <tr>
                                <td>{{ $producto['artista'] }}</td>
                                <td>{{ $producto['album'] }}</td>
                                <td>{{ $producto['cantidad'] }}</td>
                                <td>{{ $producto['precioTotal'] }}€</td>
                                <td>
                                    <form action="" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$indice}}">
                                        <button class="btn btn-danger" type="submit" name="btnBorrarElementoCarrito" value="eliminar">
                                            Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                            $total = $total + ($producto['precioTotal']);
                            ?>
                            @endforeach
                            <tr>
                                <td colspan="3" class="text-right">
                                    <h3>TOTAL</h3>
                                </td>
                                <td><?php echo ($total) ?>€</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <form action="{{ url('/order') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="usuario_dni" value="{{ Auth::user()->user_dni }}">
                                        <!-- Información del pedido -->
                                        <input type="hidden" name="producto_id" value="{{ $producto['id'] }}">
                                        <input type="hidden" name="pedido_nombre_album" value="{{ $producto['album'] }}">
                                        <input type="hidden" name="pedido_cantidad" value="{{ $producto['cantidad'] }}">
                                        <input type="hidden" name="pedido_precio_total" value="{{ $producto['precioTotal'] }}">
                                        <input type="hidden" name="fecha_compra" value="<?php echo (date('Y-m-d H:i:s')); ?>">
                                        <button class="btn btn-success btn-block" type="submit">
                                            Realizar compra</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <div class="alert alert-warning" role="alert">
                        <p>No hay productos en el carrito</p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</div>
@endsection