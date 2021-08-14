<!DOCTYPE HTML>

<html lang="es">

<head>
    @include('head')
    <title>BeatSound - Registro</title>
    <link rel="icon" href="{{URL::asset('/images/BeatSoundLogoSimple.png')}}" type="image/icon type">
</head>

<body>

    <header>
        @include('nav')
    </header>

    <form action="{{ url('/user/'.$user->user_dni) }}" method="post">
        @csrf
        <!-- Cambiamos el método para que funcione el update de los datos -->
        {{ method_field('PATCH') }}
        @include('user.formulario', ['modo'=>'Editar'])
    </form>

    <footer>
        @include('footer')
    </footer>

</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</html>