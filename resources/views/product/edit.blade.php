<head>
    <title>BeatSound - Edición de producto</title>
    <link rel="icon" href="{{URL::asset('/images/BeatSoundLogoSimple.png')}}" type="image/icon type">
    @extends('layouts.app')
</head>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar producto') }}</div>

                @if(Session::has('mensaje'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('mensaje') }}
                </div>
                @endif


                <div class="card-body">
                    <form action="{{ url('/product/'.$product->producto_id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Cambiamos el método para que funcione el update de los datos -->
                        {{ method_field('PATCH') }}
                        <!-- Debemos utilizar un token de seguridad para que Laravel sepa que la información
                        del formulario viene del propio sistema. Si no, el controlador no recogerá los datos enviados -->
                        @csrf
                        <div class="text-center">
                            <div class="form-group row">
                                <label for="inputNombre_Artista" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del artista') }}</label>

                                <div class="col-md-6">
                                    <input type="text" name="nombre_artista" value="{{ isset($product->nombre_artista)?$product->nombre_artista:'' }}" class="form-control" id="inputNombre_Artista" placeholder="Artista..." autocomplete="nombre_artista" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputNombre_Album" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del álbum') }}</label>

                                <div class="col-md-6">
                                    <input type="text" name="nombre_album" value="{{ isset($product->nombre_album)?$product->nombre_album:'' }}" class="form-control" id="inputNombre_Album" placeholder="Album..." autocomplete="nombre_album">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPrecio" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                                <div class="col-md-6">
                                    <input type="text" name="precio_unitario" value="{{ isset($product->precio_unitario)?$product->precio_unitario:'' }}" class="form-control" id="inputPrecio" placeholder="€..." autocomplete="precio_unitario">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputCategoria" class="col-md-4 col-form-label text-md-right">{{ __('Categoría') }}</label>

                                <div class="col-md-6">
                                    <input type="text" name="categoria" value="{{ isset($product->categoria)?$product->categoria:'' }}" class="form-control" id="inputCategoria" placeholder="Rock, blues, funk..." autocomplete="categoria">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputMiniatura" class="col-md-4 col-form-label text-md-right">{{ __('Miniatura') }}</label>

                                <div class="col-md-6">
                                    <input type="file" name="miniatura" class="form-control" id="inputMiniatura" autocomplete="miniatura">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputAño" class="col-md-4 col-form-label text-md-right">{{ __('Año') }}</label>

                                <div class="col-md-6">
                                    <input type="text" name="año" value="{{ isset($product->año)?$product->año:'' }}" class="form-control" id="inputAño" placeholder="Año..." autocomplete="año">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputFormato" class="col-md-4 col-form-label text-md-right">Formato</label>
                                <div class="col-md-6">
                                    <select id="inputFormato" name="formato" class="form-control">
                                        <option value="Vinilo" @if($product->formato == 'Vinilo')selected @endif>Vinilo</option>
                                        <option value="CD" @if($product->formato == 'CD')selected @endif>CD</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection