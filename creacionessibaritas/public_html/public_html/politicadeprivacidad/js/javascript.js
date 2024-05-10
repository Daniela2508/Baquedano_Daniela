// Función para aceptar las cookies
function aceptarCookies() {
    // Ocultar el banner de cookies
    document.getElementById('cookieBanner').style.display = 'none';
    // Guardar el consentimiento del usuario en el almacenamiento local
    localStorage.setItem('cookiesAceptadas', 'true');
}

// Función para mostrar el banner de cookies si aún no se han aceptado
window.onload = function() {
    if (!localStorage.getItem('cookiesAceptadas')) {
        document.getElementById('cookieBanner').style.display = 'block';
    }
}

