<?php
session_start();

// Verificar si el usuario ha iniciado sesión correctamente
if (!isset($_SESSION['id_usuario']) || empty($_SESSION['id_usuario'])) {
    // Si el usuario no ha iniciado sesión, redirigirlo al formulario de inicio de sesión
    header('Location: ../login/index.php');
    exit(); 
}


// Generar un código de reserva único
$codigoReserva = generarCodigoReserva();

function generarCodigoReserva() {
    $caracteresPermitidos = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $longitudCodigo = 8;
    $codigoGenerado = '';

    for ($i = 0; $i < $longitudCodigo; $i++) {
        $codigoGenerado .= $caracteresPermitidos[rand(0, strlen($caracteresPermitidos) - 1)];
    }

    return $codigoGenerado;
}

// Verificar si se ha enviado el formulario de reserva
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $telefono = $_POST["telefono"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $numpersonas = $_POST["numpersonas"];

    // Obtener el ID de usuario de la sesión
    $id_usuario = $_SESSION['id_usuario'];

    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "danielaPI";
    $password = "Danielaproyecto";
    $database = "creacionessibaritas";

    // Crear conexión a la base de datos
    $conn = mysqli_connect($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Insertar la reserva en la tabla reservas
    $sql_insert_reserva = "INSERT INTO reservas (codigo, fecha, hora, numeropersonas, idcuentacliente)
                           VALUES ('$codigoReserva', '$date', '$time', '$numpersonas', '$id_usuario')";

    if ($conn->query($sql_insert_reserva) === TRUE) {
        // Si la inserción es exitosa, redirigir al usuario a la página de inicio
        header("Location: ../index.php");
        exit();
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
