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

    <div>
        <table class="table table-light">

            <thead class="thead-light">
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Dirección</th>
                    <th>Correo electrónico</th>
                    <th>Contraseña</th>
                    <th>Fecha de nacimiento</th>
                    <th>Administrador</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach( $usuarios as $usuario)
                <tr>
                    <td>{{$usuario->usuario_dni}}</td>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->apellidos}}</td>
                    <td>{{$usuario->direccion}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->contraseña}}</td>
                    <td>{{$usuario->fecha_nacimiento}}</td>
                    <td>{{$usuario->administrador}}</td>
                    <td>
                        <a class="btn btn-success" href="{{ url('/usuario/'.$usuario->usuario_dni.'/edit') }}" role="button">
                            Editar
                        </a>

                        <form action="{{ url('/usuario/'.$usuario->usuario_dni) }}" method="post">
                            <!-- Añadimos el token de seguridad para recepcionar los datos -->
                            @csrf
                            <!-- Tenemos que cambiar el método post a delete para que se pueda borrar el registro -->
                            {{ method_field('DELETE') }}
                            <button type="submit" onclick="return confirm('¿Estás seguro de querer borrar el usuario?')" class="btn btn-danger">Borrar</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <footer>
        @include('footer')
    </footer>

</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</html>