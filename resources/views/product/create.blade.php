<head>
    <title>BeatSound - Registro de producto</title>
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
                <div class="card-header">{{ __('Registro de producto') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/product') }}" enctype="multipart/form-data">
                        @csrf
                        @if(count($errors)>0)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
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
                                <input type="file" name="miniatura" value="{{ isset($product->miniatura)?$product->miniatura:'' }}" class="form-control" id="inputMiniatura" autocomplete="miniatura">
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
                                <select id="inputFormato" name="formato">
                                    <option value="Vinilo">Vinilo</option>
                                    <option value="CD">CD</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear producto') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection