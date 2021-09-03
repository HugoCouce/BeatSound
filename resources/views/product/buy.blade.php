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
                                <div>
                                    <form action="">
                                        @csrf
                                        <label for="cantidad">Cantidad:</label>
                                        <select name="cantidad" id="cantidad">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <a class="btn btn-link" href="" role="button">
                                            Comprar
                                        </a>
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