<?php
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

// Verificar si se recibieron datos del carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del carrito del cuerpo de la solicitud
    $cartItems = json_decode(file_get_contents('php://input'), true);

    // Verificar si se pudieron decodificar los datos del carrito
    if ($cartItems !== null) {
        // Generar un código de reserva único
        $codigoGenerado = generarCodigoReserva();

        // Iniciar sesión para obtener el ID del cliente
        session_start();
        
        // Obtener el ID del cliente de la sesión
        $idCuentaCliente = $_SESSION['id_usuario'];
        
        // Establecer la hora actual
        $hora = date("Y-m-d H:i:s");

        // Incluir la conexión a la base de datos
        include_once 'conexion.php';

        // Preparar y ejecutar la consulta para insertar el pedido en la base de datos
        $stmt = $conn->prepare("INSERT INTO pedidos (idcuentacliente, hora, precio, codigo) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isds", $idCuentaCliente, $hora, $precio, $codigoGenerado);
        

        // Variables para los detalles del pedido
        $precio = 0; // Inicializar el precio total del pedido
        
        // Iterar sobre los elementos del carrito y agregarlos a la base de datos
        foreach ($cartItems as $item) {
            $nombreProducto = $item['name'];
            $precioProducto = $item['price'];
            $codigo = uniqid(); // Generar un código único para cada producto en el pedido

            // Incrementar el precio total del pedido
            $precio += $precioProducto;

            // Insertar el producto en la tabla de pedidos
            $stmt->execute();
        }

        // Cerrar la conexión a la base de datos
        $stmt->close();
        $conn->close();

        // Respuesta JSON al frontend
        $response = ['success' => true, 'message' => 'Pedido procesado correctamente'];
        echo json_encode($response);
    } else {
        // Si no se pudieron decodificar los datos del carrito, enviar una respuesta de error al frontend
        $response = ['success' => false, 'message' => 'Error al decodificar los datos del carrito'];
        echo json_encode($response);
    }
} else {
    // Si la solicitud no es de tipo POST, enviar una respuesta de error al frontend
    $response = ['success' => false, 'message' => 'La solicitud debe ser de tipo POST'];
    echo json_encode($response);
}
?>
