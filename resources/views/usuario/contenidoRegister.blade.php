<form action="{{ url('/usuario') }}" method="post" enctype="multipart/form-data" class="row">
    <!-- Debemos utilizar un token de seguridad para que Laravel sepa que la información
    del formulario viene del propio sistema. Si no, el controlador no recogerá los datos enviados -->
    @csrf

    <div class="col-md-6 mx-auto">
        <div class="form-group">
            <label for="inputDNI">DNI</label>
            <input type="text" name="usuario_dni" class="form-control" id="inputDNI" placeholder="DNI">
        </div>
        <div class="form-group">
            <label for="inputNombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="inputNombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="inputApellidos">Apellidos</label>
            <input type="text" name="apellidos" class="form-control" id="inputApellidos" placeholder="Apellidos">
        </div>
        <div class="form-group">
            <label for="inputDireccion">Dirección</label>
            <input type="text" name="direccion" class="form-control" id="inputDireccion" placeholder="Direccion">
        </div>
        <div class="form-group">
            <label for="inputEmail">Correo electrónico</label>
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="ejemplo@email.com">
        </div>
        <div class="form-group">
            <label for="inputContrasenha">Contraseña</label>
            <input type="password" name="contraseña" class="form-control" id="inputContrasenha" aria-describedby="advertenciaContrasenha" placeholder="***********">
            <small id="advertenciaContrasenha" class="form-text text-muted">Nunca compartas la constraseña con nadie</small>
        </div>
        <div class="form-group">
            <label for="inputFechaNacimiento">Fecha de nacimiento</label>
            <input type="date" id="inputFechaNacimiento" name="fecha_nacimiento" min="1920-01-01" max="2100-12-31">
        </div>
        <div class="form-group">
            <input id="inputPermisos" name="administrador" type="hidden" value="0">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Crear usuario</button><br><br>
        </div>
    </div>
</form>