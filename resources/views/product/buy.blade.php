<head>
    <title>BeatSound - Productos</title>
    <link rel="icon" href="{{URL::asset('/images/BeatSoundLogoSimple.png')}}" type="image/icon type">
    @extends('layouts.app')
</head>

@section('content')

<!-- Iniciamos una sesión para guardar todos los productos que se añadan al carrito -->
<?php
session_start();
?>

<div><br><br>
    @if(isset($_POST['btnCarrito']))
    <?php
    if (!isset($_SESSION['carrito'])) {
        $id = $_POST['producto_id'];
        $artista = $_POST['nombre_artista'];
        $album = $_POST['nombre_album'];
        $cantidad = $_POST['cantidad'];
        $precioTotal = $_POST['producto_precio'] * $_POST['cantidad'];

        $producto = array(
            'id' => $id,
            'artista' => $artista,
            'album' => $album,
            'cantidad' => $cantidad,
            'precioTotal' => $precioTotal
        );

        $_SESSION['carrito'][0] = $producto;
    } else {
        $numeroDeProductos = count($_SESSION['carrito']);

        $id = $_POST['producto_id'];
        $artista = $_POST['nombre_artista'];
        $album = $_POST['nombre_album'];
        $cantidad = $_POST['cantidad'];
        $precioTotal = $_POST['producto_precio'] * $_POST['cantidad'];

        $producto = array(
            'id' => $id,
            'artista' => $artista,
            'album' => $album,
            'cantidad' => $cantidad,
            'precioTotal' => $precioTotal
        );

        $_SESSION['carrito'][$numeroDeProductos] = $producto;
    }

    ?>
    <div class="container">
        <div class="alert alert-success" role="alert">
            <p>Producto añadido al carrito...</p>
            <!-- <p>Anterior mensaje de prueba
                {{--<?php
                    print_r($_SESSION['carrito']);
                    ?> --}}
            </p> -->
            <a href="{{ url('/order/create') }}" class="badge badge-success">Ver carrito</a>
        </div>
    </div>
    @endif

    <div class="">
        <div class="row justify-content-center">
            <div class="container mx-auto mt-4">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('storage').'/'.$product->miniatura }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->nombre_artista }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $product->nombre_album }} - {{ $product->año }}</h6>
                                <p class="card-text">Género: {{ $product->categoria }}</p>
                                <p class="card-text">Formato: {{ $product->formato }}</p>
                                <div>
                                    <form action="" method="POST">
                                        @csrf
                                        <input type="hidden" name="producto_id" id="producto_id" value="{{ $product->producto_id }}">
                                        <input type="hidden" name="nombre_artista" id="nombre_artista" value="{{ $product->nombre_artista }}">
                                        <input type="hidden" name="nombre_album" id="nombre_album" value="{{ $product->nombre_album }}">
                                        <input type="hidden" name="producto_precio" id="producto_precio" value="{{ $product->precio_unitario }}">
                                        <label for="cantidad">Cantidad:</label>
                                        <select name="cantidad" id="cantidad">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        @guest
                                        @else
                                        <button class="btn btn-primary" name="btnCarrito" value="Agregar" type="submit">
                                            Agregar al carrito
                                        </button>
                                        @endguest
                                    </form>
                                </div>
                            </div>
                        </div><br><br><br>
                    </div>
                    @endforeach
                </div>
                <!-- Paginacion -->
                <div class="d-flex text-center justify-content-center">
                    {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection