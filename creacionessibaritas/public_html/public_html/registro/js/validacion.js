// Función para validar el formulario de registro
function validarRegistro() {
    // Obtener los valores de los campos del formulario
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var email = document.getElementById("email").value;
    var contrasenia = document.getElementById("contrasenia").value;
    var contraseniaRepetida = document.getElementById("contraseniaRepetida").value;
    var telefono = document.getElementById("telefono").value;
    var fechaNacimiento = document.getElementById("fechanacimiento").value;
    var tipovia = document.getElementById("tipovia").value;
    var nombreVia = document.getElementById("nombrevia").value;
    var numero = document.getElementById("numero").value;
    var cp = document.getElementById("cp").value;
    var provincia = document.getElementById("provincia").value;
    var poblacion = document.getElementById("poblacion").value;

    // Validar que todos los campos estén completos
    if (nombre == "" || apellido == "" || email == "" || contrasenia == "" || contraseniaRepetida == "" || telefono == "" || fechaNacimiento == "" || tipovia == "" || nombreVia == "" || numero == "" || cp == "" || provincia == "" || poblacion == "") {
        alert("Por favor, complete todos los campos.");
        return false;
    }

    // Validar formato de correo electrónico
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Por favor, introduzca un correo electrónico válido.");
        return false;
    }

    // Validar que las contraseñas coincidan
    if (contrasenia !== contraseniaRepetida) {
        alert("Las contraseñas no coinciden.");
        return false;
    }

    
    // Verificar la seguridad de la contraseña
    if (!verificarSeguridadContrasenia(contrasenia)) {
        alert("La contraseña debe tener al menos 8 caracteres y contener al menos un número, una letra mayúscula, una letra minúscula y un carácter especial.");
        return false; // Detener el envío del formulario
    }

    // Si todas las validaciones pasan, retornar true para enviar el formulario
    return true;
}


// Función para verificar la seguridad de la contraseña
function verificarSeguridadContrasenia(contrasenia) {
    // Expresiones regulares para verificar la contraseña
    var tieneNumero = /\d/.test(contrasenia);
    var tieneLetraMinuscula = /[a-z]/.test(contrasenia);
    var tieneLetraMayuscula = /[A-Z]/.test(contrasenia);
    var tieneCaracterEspecial = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(contrasenia);

    // Verificar la longitud de la contraseña
    var esLongitudValida = contrasenia.length >= 8;

    // Verificar si cumple con todos los requisitos
    if (tieneNumero && tieneLetraMinuscula && tieneLetraMayuscula && tieneCaracterEspecial && esLongitudValida) {
        return true;
    } else {
        return false;
    }
}


