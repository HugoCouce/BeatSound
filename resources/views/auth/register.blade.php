<head>
    <title>BeatSound - Registro</title>
    <link rel="icon" href="{{URL::asset('/images/BeatSoundLogoSimple.png')}}" type="image/icon type">
    @extends('layouts.app')
</head>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" id="formularioRegistro" action="{{ url('/user') }}">
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
                            <label for="inputDNI" class="col-md-4 col-form-label text-md-right">{{ __('DNI') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="user_dni" value="{{ isset($user->user_dni)?$user->user_dni:'' }}" class="form-control" id="inputDNI" placeholder="DNI" autocomplete="user_dni" autofocus>
                                <div id="errorInputDni"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputNombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="nombre" value="{{ isset($user->nombre)?$user->nombre:'' }}" class="form-control" id="inputNombre" placeholder="Nombre" autocomplete="nombre">
                                <div id="errorInputNombre"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputApellidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="apellidos" value="{{ isset($user->apellidos)?$user->apellidos:'' }}" class="form-control" id="inputApellidos" placeholder="Apellidos">
                                <div id="errorInputApellidos"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputDireccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="direccion" value="{{ isset($user->direccion)?$user->direccion:'' }}" class="form-control" id="inputDireccion" placeholder="Calle / Número / Piso">
                                <div id="errorInputDireccion"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="email" value="{{ isset($user->email)?$user->email:'' }}" class="form-control" id="inputEmail" placeholder="ejemplo@email.com">
                                <div id="errorInputEmail"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputContraseña" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input type="password" name="password" value="{{ isset($user->password)?$user->password:'' }}" class="form-control" id="inputContraseña" aria-describedby="advertenciaContraseña" placeholder="***********">
                                <small id="advertenciaContraseña" class="form-text text-muted">Nunca compartas la constraseña con nadie</small>
                                <div id="errorInputPass"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputContraseñaConfirmacion" class="col-md-4 col-form-label text-md-right">{{ __('Repite la contraseña') }}</label>

                            <div class="col-md-6">
                                <input type="password" name="password_confirmation" value="{{ isset($user->password_confirmation)?$user->password_confirmation:'' }}" class="form-control" id="inputContraseñaConfirmacion">
                                <div id="errorInputConfirmarPass"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputFechaNacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento') }}</label>

                            <div class="col-md-6">
                                <input type="date" name="fecha_nacimiento" value="{{ isset($user->fecha_nacimiento)?$user->fecha_nacimiento:'' }}" id="inputFechaNacimiento" min="1920-01-01" max="2100-12-31">
                                <div id="errorInputDate" style="color: red">* Debes seleccionar una fecha de nacimiento</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <input id="inputPermisos" name="administrador" value="{{ isset($user->administrador)?$user->administrador:'0' }}" id="inputFechaNacimiento" type="hidden" value="0">                            
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear usuario') }}
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