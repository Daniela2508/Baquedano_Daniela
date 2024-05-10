<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Creaciones Sibaritas</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../recursos/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="js/validacion.js"></script>
</head>

<body>
    
    <div class="registroForm">
        <form method="post" action="insertar.php" onsubmit="return validarRegistro()">
            <div class="menu">
                <a href="../index.php">Inicio</a>
                <a href="../carta/index.php">Carta</a>
                <a href="../reserva/index.php">Reserva</a>
            </div>
            <div class="wrapperLogo">
                <h1 class="textoLogo">Registro</h1>
            </div>
            <div class = "caja-input">
                <input type="text" placeholder="Nombre" id="nombre" name="nombre">
                <i class='bx bx-user'></i>
            </div>
            <div class = "caja-input">
                <input type="text" placeholder="Apellido" id="apellido" name="apellido" required>
                <i class='bx bx-user'></i>
            </div>
            <div class = "caja-input">
                <input type="email" placeholder="Correo" id="email" name="email" required>
                    <i class='bx bx-envelope'></i>
            </div>
            <div class = "caja-input">
                <input type="password" placeholder="Contraseña" name="contrasenia" id="contrasenia" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class = "caja-input">
                <input type="password" placeholder="Repetir Contraseña" id="contrasenia" name="contrasenia" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class = "caja-input">
                <input type="tel" name="telefono" id="telefono" placeholder="Teléfono" required>
                <i class='bx bx-user'></i>
            </div>
            <div class = "caja-input">
                <input type="date" name="fechanacimiento" id="fechanacimiento" placeholder="Fecha nacimiento" required>
            </div>
            <div class = "caja-submit">
                <select name="tipovia" id="tipovia" name="tipovia" required>
                    <option value="" selected disabled>Tipo de vía</option>
                    <option value="calle">Calle</option>
                    <option value="avenida">Avenida</option>
                    <option value="carretera">Carretera</option>
                    <option value="camino">Camino</option>
                </select>
            
            </div> <br>
            <div class = "caja-input">
                <input type="text" name="nombrevia" id="nombrevia" name="nombrevia" placeholder="Nombre de vía" required maxlength="20">
                <i class='bx bx-home-alt'></i>
            </div>
            <div class = "caja-input">
                <input type="text" name="numero" id="numero" name="numero" placeholder="Nº" required>
                <i class='bx bx-home-circle'></i>
            </div>
            <div class = "caja-input">
                <input type="text" name="cp" id="cp" id="cp" placeholder="Código postal" required min="01001" maxlength="5">
                <i class='bx bx-world' ></i>
            </div>
            <div class = "caja-input">
                <input type="text" name="provincia" id="provincia" name="provincia" placeholder="Provincia" required maxlength="30">
                <i class='bx bx-world' ></i>
            </div>
            <div class = "caja-input">
                <input type="text" name="poblacion" id="poblacion" name="poblacion" placeholder="Población" required maxlength="30">
                <i class='bx bx-world' ></i>
            </div>
            
            <a href="insertar.php"><button type="submit" class="btn">Registrarse</button></a>

            <div class="link-login">
                <p>¿Eres miembro? <a href="../login/index.php">Iniciar Sesión</p></a>
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