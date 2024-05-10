<?php
session_start();
// Verificar si se ha enviado el formulario de inicio de sesión.
if(isset($_POST['email']) && isset($_POST['contrasenia'])) {
    $servername = "localhost";
    $username = "danielaPI";
    $password = "Danielaproyecto";
    $database = "creacionessibaritas";

    // Conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $database);

    // Comprobar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener los datos del formulario
    $email = $_POST['email'];
    $contrasenia = $_POST['contrasenia'];

    // Consulta SQL para consultar el inicio de sesión
    $sql = "SELECT * FROM cuentacliente WHERE email = ? AND contrasenia = ?";
    $login = $conn->prepare($sql);

    if(!$login){
        die("Error al preparar la consulta: ".$conn->error);
    }

    // Enlazar los parámetros de la consulta
    $login->bind_param("ss", $email, $contrasenia); 

    // Ejecutar la consulta
    $login->execute();

    // Obtener el resultado de la consulta
    $resultado = $login->get_result();

    // Verificar si se encontró un usuario que coincida
    if ($resultado->num_rows == 1) {
        // Obtenemos el nombre del usuario para usarlo en la página de inicio a continuación
        $fila=$resultado->fetch_assoc();
        $nombre_usuario=$fila['nombre'];
        $id_usuario = $fila['id']; // Suponiendo que el ID del usuario se almacena en la columna 'id' de la tabla 'cuentacliente'.
        $_SESSION['id_usuario'] = $id_usuario;

        // Iniciar sesión y redirigir al usuario
        $_SESSION['email'] = $email;
        $_SESSION['nombre_usuario'] = $nombre_usuario; // Guardamos el nombre de usuario en la sesión.
        header('Location: ../index.php');
        exit();
    } else {
        echo "Correo electrónico o contraseña incorrectos." ;
        exit;
    }

    // Cerrar la conexión
    $conn->close();
    
} else {
    // Si no se han enviado los datos del formulario
    echo "Correo electrónico o contraseña no especificados.";
    exit;
}
?>
