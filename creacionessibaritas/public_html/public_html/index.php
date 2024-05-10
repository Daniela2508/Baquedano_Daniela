<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creaciones Sibaritas</title>
    <link rel="stylesheet" href="inicio\css\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="recursos/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
<body>
   
    <?php include 'politicadeprivacidad/banner.php'; ?>

    <div class="wrapperLogo">
        <!--<img src="recursos/logo.png" class="logo">-->
        <h1 class="textoLogo">Creaciones Sibaritas</h1>
    </div>
    <div class="topnav" id="myTopnav">
    <!--<a href="#inicio">Inicio</a>-->
        <P>MADRID</P>
        <a href="carta/index.php">CARTA</a>
        <a href="reserva/index.php">HAZ TU RESERVA</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        
        <div class="wrapperLogin">
            <?php
            
                if(isset($_SESSION['nombre_usuario'])) {
                // Si el usuario ha iniciado sesión, mostrar el botón de cerrar sesión.
                echo '<a href="logout/logout.php">CERRAR SESIÓN</a>';
                } else {
                // Si el usuario no ha iniciado sesión, mostrar el botón de inicio de sesión.
                echo '<a href="login/index.php">SU CUENTA SIBARITA</a>';
                }
            ?>
        </div>
    </div>

   
    
    <div class="fondo">
        <div class="wrapperCentro">
            <img src="recursos/flecha.png" class="disenioFlecha">
            <p>EN CREACIONES SIBARITAS, CELEBRAMOS LA VIDA CON GASTRONOMÍA, UNA EXPERIENCIA ÚNICA QUE DEFINE NUESTRA EXCELENCIA.</p>
            <img src="recursos/flecha.png" class="disenioFlechaInv">
        </div>
    </div>

    

    
    
    <script src="recursos/javascripttopnav/javascript.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
            if(disclaimer) {
                disclaimer.remove();
            }
        });
    </script>


</body>
</html>