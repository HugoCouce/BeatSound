<head>
    <title>BeatSound - Edición</title>
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
                <div class="card-header">{{ __('Editar') }}</div>

                @if(Session::has('mensaje'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('mensaje') }}
                </div>
                @endif


                <div class="card-body">
                    <form action="{{ url('/user/'.$user->user_dni) }}" method="post">
                        @csrf
                        <!-- Cambiamos el método para que funcione el update de los datos -->
                        {{ method_field('PATCH') }}
                        <!-- Debemos utilizar un token de seguridad para que Laravel sepa que la información
                        del formulario viene del propio sistema. Si no, el controlador no recogerá los datos enviados -->
                        @csrf

                        <div class="col-md-6 mx-auto">
                            <div class="form-group">
                                <label for="inputDNI">DNI</label>
                                <input type="text" name="user_dni" value="{{ isset($user->user_dni)?$user->user_dni:'' }}" class="form-control" id="inputDNI" placeholder="DNI">
                            </div>
                            <div class="form-group">
                                <label for="inputNombre">Nombre</label>
                                <input type="text" name="nombre" value="{{ isset($user->nombre)?$user->nombre:'' }}" class="form-control" id="inputNombre" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="inputApellidos">Apellidos</label>
                                <input type="text" name="apellidos" value="{{ isset($user->apellidos)?$user->apellidos:'' }}" class="form-control" id="inputApellidos" placeholder="Apellidos">
                            </div>
                            <div class="form-group">
                                <label for="inputDireccion">Dirección</label>
                                <input type="text" name="direccion" value="{{ isset($user->direccion)?$user->direccion:'' }}" class="form-control" id="inputDireccion" placeholder="Direccion">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Correo electrónico</label>
                                <input type="email" name="email" value="{{ isset($user->email)?$user->email:'' }}" class="form-control" id="inputEmail" placeholder="ejemplo@email.com">
                            </div>
                            <div class="form-group">
                                <label for="inputContraseña">Contraseña</label>
                                <input type="password" name="password" value="{{ isset($user->password)?$user->password:'' }}" class="form-control" id="inputContraseña" aria-describedby="advertenciaContraseña" placeholder="***********">
                                <small id="advertenciaContraseña" class="form-text text-muted">Nunca compartas la constraseña con nadie</small>
                            </div>
                            <div class="form-group">
                                <label for="inputContraseñaConfirmacion">Repetir contraseña</label>
                                <input type="password" name="password_confirmation" value="{{ isset($user->password_confirmation)?$user->password_confirmation:'' }}" class="form-control" id="inputContraseñaConfirmacion">
                            </div>
                            <div class="form-group">
                                <label for="inputFechaNacimiento">Fecha de nacimiento</label>
                                <input type="date" name="fecha_nacimiento" value="{{ isset($user->fecha_nacimiento)?$user->fecha_nacimiento:'' }}" id="inputFechaNacimiento" min="1920-01-01" max="2100-12-31">
                            </div>
                            <div class="form-group">
                                <input id="inputPermisos" name="administrador" value="{{ isset($user->administrador)?$user->administrador:'0' }}" id="inputFechaNacimiento" type="hidden" value="0">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer d-flex align-items-center justify-content-center">
                    <form action=" {{ url('/user/'.$user->user_dni) }}" method="post" style="display: inline-block;">
                        <p>{{ __('¿Deseas eliminar tu cuenta?') }}</p>
                        <!-- Añadimos el token de seguridad para recepcionar los datos -->
                        @csrf
                        <!-- Tenemos que cambiar el método a delete para que se pueda borrar el registro -->
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('¿Estás totalmente seguro de querer eliminar tu cuenta?')" class="btn btn-sm btn-danger">Eliminar mi cuenta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection