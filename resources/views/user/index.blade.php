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

    <!-- Si recepcionamos el mensaje del controlador, lo mostramos en pantalla. -->
    @if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
    @endif

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
                    <th>ContraseñaR</th>
                    <th>Fecha de nacimiento</th>
                    <th>Administrador</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach( $users as $user)
                <tr>
                    <td>{{$user->user_dni}}</td>
                    <td>{{$user->nombre}}</td>
                    <td>{{$user->apellidos}}</td>
                    <td>{{$user->direccion}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->password_confirmation}}</td>
                    <td>{{$user->fecha_nacimiento}}</td>
                    <td>{{$user->administrador}}</td>
                    <td>
                        <a class="btn btn-success" href="{{ url('/user/'.$user->user_dni.'/edit') }}" role="button">
                            Editar
                        </a>

                        <form action="{{ url('/user/'.$user->user_dni) }}" method="post">
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