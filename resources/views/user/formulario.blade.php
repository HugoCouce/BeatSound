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
            <button type="submit" class="btn btn-primary">Editar usuario</button><br><br>
        </div>
    </div>