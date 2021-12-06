window.onload = function() {
    console.log('Probando fichero');

    $("a").hover(function() {
        $(this).css("fontSize", "18px");
    }, function() {
        $(this).css("fontSize", "16px");
    });


    /* Validación simple del formulario */
    $('input[name=user_dni]').blur(function() {
        if ($(this).val().length == 0) {
            document.getElementById("errorInputDni").innerHTML = "* Debes introducir un número de DNI";
            document.getElementById("errorInputDni").style.color = "red";
        } else {
            document.getElementById("inputDNI").innerHTML = "";
            let dni = document.getElementById('inputDNI').value;
            var re = /^[0-9]{8}[A-Za-z]{1}$/;
            if (re.test(dni) == true) {
                document.getElementById("errorInputDni").innerHTML = "";
            } else {
                document.getElementById("errorInputDni").innerHTML = "* El email está mal escrito";
                document.getElementById("errorInputDni").style.color = "red";
            }
        }
    });

    $('input[name=nombre]').blur(function() {
        if ($(this).val().length == 0) {
            /* alert("El campo no puede quedar vacío"); */
            document.getElementById("errorInputNombre").innerHTML = "* Debes introducir un nombre";
            document.getElementById("errorInputNombre").style.color = "red";
        } else {
            document.getElementById("errorInputNombre").innerHTML = "";
        }
    });

    $('input[name=apellidos]').blur(function() {
        if ($(this).val().length == 0) {
            /* alert("El campo no puede quedar vacío"); */
            document.getElementById("errorInputApellidos").innerHTML = "* Debes introducir los apellidos";
            document.getElementById("errorInputApellidos").style.color = "red";
        } else {
            document.getElementById("errorInputApellidos").innerHTML = "";
        }
    });

    $('input[name=direccion]').blur(function() {
        if ($(this).val().length == 0) {
            /* alert("El campo no puede quedar vacío"); */
            document.getElementById("errorInputDireccion").innerHTML = "* Debes introducir una dirección";
            document.getElementById("errorInputDireccion").style.color = "red";
        } else {
            document.getElementById("errorInputDireccion").innerHTML = "";
        }
    });

    $('input[name=email]').blur(function() {
        if ($(this).val().length == 0) {
            /* alert("El campo no puede quedar vacío"); */
            document.getElementById("errorInputEmail").innerHTML = "* Debes introducir una email";
            document.getElementById("errorInputEmail").style.color = "red";
        } else {
            document.getElementById("errorInputEmail").innerHTML = "";
            let email = document.getElementById('inputEmail').value;
            var re = /\S+@\S+\.\S+/;
            if (re.test(email) == true) {} else {
                document.getElementById("errorInputEmail").innerHTML = "* El email está mal escrito";
                document.getElementById("errorInputEmail").style.color = "red";
            }

        }
    });

    $('input[name=password]').blur(function() {
        if ($(this).val().length == 0) {
            /* alert("El campo no puede quedar vacío"); */
            document.getElementById("errorInputPass").innerHTML = "* Debes introducir una contraseña";
            document.getElementById("errorInputPass").style.color = "red";
        } else {
            document.getElementById("errorInputPass").innerHTML = "";
        }
    });

    $('input[name=password_confirmation]').blur(function() {
        if ($(this).val().length == 0) {
            /* alert("El campo no puede quedar vacío"); */
            document.getElementById("errorInputConfirmarPass").innerHTML = "* Se debe confirmar la contraseña";
            document.getElementById("errorInputConfirmarPass").style.color = "red";
        } else {
            document.getElementById("errorInputConfirmarPass").innerHTML = "";
            var pass = document.getElementById('inputContraseña').value;
            var confirmacion = document.getElementById('inputContraseñaConfirmacion').value;
            if (pass === confirmacion) {

            } else {
                document.getElementById("errorInputConfirmarPass").innerHTML = "* Las contraseñas no coinciden";
                document.getElementById("errorInputConfirmarPass").style.color = "red";
            }
        }

    });

    $('input[name=fecha_nacimiento]').blur(function() {
        if ($(this).val().length == 0) {
            /* alert("El campo no puede quedar vacío"); */
            document.getElementById("errorInputDate").innerHTML = "* Debes seleccionar una fecha de nacimiento";
            document.getElementById("errorInputDate").style.color = "red";
        } else {
            document.getElementById("errorInputDate").innerHTML = "";
        }
    });
}