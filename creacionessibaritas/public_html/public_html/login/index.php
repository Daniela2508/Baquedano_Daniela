<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Creaciones Sibaritas</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../recursos/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="loginForm" >
        <form method="post" action="read.php">
            <div class="menu">
                <a href="../index.php">Inicio</a>
                <a href="../carta/index.php">Carta</a>
                <a href="../reserva/index.php">Reserva</a>
            </div>
            
    
            
            <div class="wrapperLogo">
                <h1 class="textoLogo">Login</h1>
            </div>
            <div class = "caja-input">
                <input type="text" placeholder="Email" id="email" name="email" required>
                <i class='bx bx-user'></i>
            </div>
            <div class = "caja-input">
                <input type="password" placeholder="Contraseña" id="contrasenia" name="contrasenia" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="recuerdame-contraseniaForgot">
                <label> <input type="checkbox">Recuérdame</label>
                <a href="#">Contraseña olvidada?</a>
            </div>
            
            
            <a href="read.php"><button type="submit" class="btn">Iniciar Sesión</button></a>

            <div class="link-registro">
                <p>¿No eres miembro? <a href="../registro/index.php">Regístrate</p></a>
            </div>
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