<head>
    <title>BeatSound - Productos</title>
    <link rel="icon" href="{{URL::asset('/images/BeatSoundLogoSimple.png')}}" type="image/icon type">
    @extends('layouts.app')
</head>

@section('content')

<div>
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
                                <a href="#" class="btn mr-2"><i class="fas fa-link"></i>Comprar</a>
                                <a href="#" class="btn "><i class="fab fa-github"></i>Página oficial</a>
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