<head>
    <title>BeatSound - Panel de control</title>
    <link rel="icon" href="{{URL::asset('/images/BeatSoundLogoSimple.png')}}" type="image/icon type">
    @extends('layouts.app')
</head>

@section('content')

<div>
    <div class="">
        <div class="row justify-content-center">
            <div class="col-11">
                <div class="card">
                    <div class="card-header">{{ __('Panel de control') }}
                        <a class="btn btn-link" href="{{ url('/product/create') }}" role="button">
                            Registrar nuevo producto
                        </a>
                    </div>
                    <table class="card-table table table-light text-center">
                        <thead class="thead-light">
                            <tr>
                                <th>Miniatura</th>
                                <th>Producto ID</th>
                                <th>Artista</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Categoría</th>
                                <th>Año</th>
                                <th>Formato</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach( $products as $product)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage').'/'.$product->miniatura }}" alt="" width="150" height="150">
                                </td>
                                <td>{{ $product->producto_id }}</td>
                                <td>{{ $product->nombre_artista }}</td>
                                <td>{{ $product->nombre_album }}</td>
                                <td>{{ $product->precio_unitario }}</td>
                                <td>{{ $product->categoria }}</td>
                                <td>{{ $product->año }}</td>
                                <td>{{ $product->formato }}</td>
                                <td>
                                    <div class="btn-group d-flex" role="group">
                                        <a class="btn btn-link" href="{{ url('/product/'.$product->producto_id.'/edit') }}" role="button">
                                            Editar
                                        </a>

                                        <form action="{{ url('/product/'.$product->producto_id) }}" method="post">
                                            <!-- Añadimos el token de seguridad para recepcionar los datos -->
                                            @csrf
                                            <!-- Tenemos que cambiar el método post a delete para que se pueda borrar el registro -->
                                            {{ method_field('DELETE') }}
                                            <button type="submit" onclick="return confirm('¿Estás seguro de querer borrar el producto')" class="btn btn-danger">Borrar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Paginacion -->
                    <div class="d-flex text-center justify-content-center">
                        {!! $products->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection