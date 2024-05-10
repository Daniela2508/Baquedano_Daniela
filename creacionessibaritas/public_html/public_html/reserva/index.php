<?php
    session_start();
    if(!isset($_SESSION['nombre_usuario'])) {
        // Si el usuario no ha iniciado sesión, redirigirlo al formulario de inicio de sesión.
        header('Location: ../login/index.php');
        exit(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva | Creaciones Sibaritas</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="../recursos/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="reservaForm">
        <form action="insertar.php" method="post">
            <div class="menu">
                <a href="../index.php">Inicio</a>
                <a href="../carta/index.php">Carta</a>
            </div>
            <div class="wrapperLogo">
                <h1 class="textoLogo">Reserva</h1>
            </div>

          
        
            <input type="phone"  class="input-caja" placeholder="Teléfono" id="telefono" name="telefono" required><br><br>

            <input type="date" class="input-caja" placeholder="date" id="date" name="date" required><br><br>

            <input type="time" class="input-caja" placeholder="time" id="time" name="time" required><br><br>

          
            <input type="number" class="input-caja" placeholder="Cantidad de personas" id="numpersonas" name="numpersonas" min="1" required><br><br>
            
            <a href="insertar.php"><button type="submit" class="btn">Reservar</button></a>
        </form>
       
    </div>

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