<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creaciones Sibaritas | Política de Privacidad</title>
    <!-- Estilos CSS para el banner de cookies -->
    <link rel="stylesheet" href="politicadeprivacidad\css\style.css">
</head>
<body>

<!--Banner para las cookies-->

<div id="cookieBanner" class="banner" <?php echo !isset($_COOKIE['aceptar_cookies']) ? '' : 'style="display: block ;"'; ?>>
    <p>Este sitio web utiliza cookies para garantizar la mejor experiencia de usuario. Al utilizar nuestro sitio, aceptas el uso de cookies de acuerdo con nuestra <a href="politicadeprivacidad\politicaprivacidad.html">Política de Privacidad</a>.</p>
    <button onclick="aceptarCookies()" class='botonaceptar'>Aceptar</button>
</div>


<script>
    function aceptarCookies() {
        document.getElementById('cookieBanner').style.display = 'none';
        // Crear una cookie para registrar la aceptación del usuario
        document.cookie = "aceptar_cookies=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
    }
</script>

    <!-- Script JavaScript para el banner de cookies -->
    <script src="js/script.js"></script>
</body>
</html>
