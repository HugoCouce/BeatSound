    <!-- Debemos utilizar un token de seguridad para que Laravel sepa que la información
    del formulario viene del propio sistema. Si no, el controlador no recogerá los datos enviados -->
    @csrf

    <div class="col-md-6 mx-auto">
        <div class="form-group">
            <label for="inputDNI">DNI</label>
            <input type="text" name="usuario_dni" value="{{ isset($usuario->usuario_dni)?$usuario->usuario_dni:'' }}" class="form-control" id="inputDNI" placeholder="DNI">
        </div>
        <div class="form-group">
            <label for="inputNombre">Nombre</label>
            <input type="text" name="nombre" value="{{ isset($usuario->nombre)?$usuario->nombre:'' }}" class="form-control" id="inputNombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="inputApellidos">Apellidos</label>
            <input type="text" name="apellidos" value="{{ isset($usuario->apellidos)?$usuario->apellidos:'' }}" class="form-control" id="inputApellidos" placeholder="Apellidos">
        </div>
        <div class="form-group">
            <label for="inputDireccion">Dirección</label>
            <input type="text" name="direccion" value="{{ isset($usuario->direccion)?$usuario->direccion:'' }}" class="form-control" id="inputDireccion" placeholder="Direccion">
        </div>
        <div class="form-group">
            <label for="inputEmail">Correo electrónico</label>
            <input type="email" name="email" value="{{ isset($usuario->email)?$usuario->email:'' }}" class="form-control" id="inputEmail" placeholder="ejemplo@email.com">
        </div>
        <div class="form-group">
            <label for="inputContraseña">Contraseña</label>
            <input type="password" name="contraseña" value="{{ isset($usuario->contraseña)?$usuario->contraseña:'' }}" class="form-control" id="inputContraseña" aria-describedby="advertenciaContraseña" placeholder="***********">
            <small id="advertenciaContraseña" class="form-text text-muted">Nunca compartas la constraseña con nadie</small>
        </div>
        <div class="form-group">
            <label for="inputFechaNacimiento">Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" value="{{ isset($usuario->fecha_nacimiento)?$usuario->fecha_nacimiento:'' }}" id="inputFechaNacimiento" min="1920-01-01" max="2100-12-31">
        </div>
        <div class="form-group">
            <input id="inputPermisos" name="administrador" value="{{ isset($usuario->administrador)?$usuario->administrador:'0' }}" id="inputFechaNacimiento" type="hidden" value="0">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Crear usuario</button><br><br>
        </div>
    </div>