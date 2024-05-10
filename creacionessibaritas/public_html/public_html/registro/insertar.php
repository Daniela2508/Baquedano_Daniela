<?php
    function obtenerIdClienteRecienCreado($conn) {
        // Esta función debería recuperar el ID del cliente recién insertado
        return $conn->insert_id;
    }

    // Incluir el archivo de conexión a la base de datos si es necesario

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $contrasenia = $_POST["contrasenia"];
    $telefono = $_POST["telefono"];
    $fechanacimiento = $_POST["fechanacimiento"];
    $tipovia = $_POST["tipovia"];
    $nombrevia = $_POST["nombrevia"];
    $numero = $_POST["numero"];
    $cp = $_POST["cp"];
    $provincia = $_POST["provincia"];
    $poblacion = $_POST["poblacion"];

    // Datos de conexión a la base de datos
    
    $servername = "localhost";
    $username = "danielaPI";
    $password = "Danielaproyecto";
    $database = "creacionessibaritas";

    // Crear conexión

    $conn = mysqli_connect($servername, $username, $password, $database);
    if ($conn->connect_error) {
        throw new Exception("Error de conexión: " . $conn->connect_error);
    } 

    // Comprobar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir datos del formulario
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $contrasenia = $_POST["contrasenia"];
        $telefono = $_POST["telefono"];
        $fechanacimiento = $_POST["fechanacimiento"];
        $tipovia = $_POST["tipovia"];
        $nombrevia = $_POST["nombrevia"];
        $numero = $_POST["numero"];
        $cp = $_POST["cp"];
        $provincia = $_POST["provincia"];
        $poblacion = $_POST["poblacion"];

        // Preparar la consulta SQL para la inserción de datos
        $sqldireccion = "INSERT INTO direccion (tipovia, nombrevia, numero, cp, provincia, poblacion)
                        VALUES ('$tipovia', '$nombrevia', $numero,'$cp','$provincia', '$poblacion')";

        if ($conn->query($sqldireccion) === TRUE) {
                $iddireccion=$conn->insert_id;
            

            $sql = "INSERT INTO cuentacliente (nombre, apellido, email, fechanacimiento, contrasenia, telefono, iddireccion)
                    VALUES ('$nombre', '$apellido', '$email','$fechanacimiento','$contrasenia', '$telefono',$iddireccion)";

            
            // Ejecutar la consulta
            if ($conn->query($sql) === TRUE ) {
                echo "Datos insertados correctamente.<br>";

                // Iniciar sesión automáticamente después del registro exitoso
                session_start();
                $_SESSION['email'] = $email; // Utiliza el correo electrónico proporcionado durante el registro
                $_SESSION['nombre_usuario'] = $nombre; // Utiliza el nombre proporcionado durante el registro
                $id_cliente = obtenerIdClienteRecienCreado($conn);
                $_SESSION['id_usuario'] = $id_cliente; // Guardar el ID del cliente en la sesión
                
                // Redirigir al usuario a la página de inicio después del registro exitoso
                header("Location: ../index.php");
                exit();
            } else {
                echo "Error al insertar datos: " . $conn->error . "<br>";
            }
        }else {
            echo "Error al insertar datos en la tabla 'direccion': " . $conn->error . "<br>";
        }
    }
?>