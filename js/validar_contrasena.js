var passwordInput = document.getElementById("password");
var confirmPasswordInput = document.getElementById("confirmPassword");
var submitButton = document.getElementById("submitButton");
var mensaje = document.getElementById("mensaje");

function validarContraseñas() {
    var password = passwordInput.value;
    var confirmPassword = confirmPasswordInput.value;

    if (password === confirmPassword) {
        mensaje.innerHTML = "";
        submitButton.disabled = false; // Habilitar el botón de envío
    } else {
        mensaje.innerHTML = "Las contraseñas no coinciden.";
        submitButton.disabled = true; // Deshabilitar el botón de envío
    }
}

passwordInput.addEventListener("input", validarContraseñas);
confirmPasswordInput.addEventListener("input", validarContraseñas);
