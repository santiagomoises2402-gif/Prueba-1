<?php
$servername = "localhost"; // Cambia esto si tu servidor es diferente
$username = "root"; // Cambia esto por tu usuario de MySQL
$password = ""; // Cambia esto por tu contraseña de MySQL
$dbname = "tienda"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos de la solicitud
$data = json_decode(file_get_contents("php://input"), true);
$producto = $data['producto'];
$cantidad = $data['cantidad'];
$precio = $data['precio'];
$total = $data['total'];

// Preparar y vincular
$stmt = $conn->prepare("INSERT INTO compras (producto, cantidad, precio, total) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sidd", $producto, $cantidad, $precio, $total);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Compra guardada correctamente."]);
} else {
    echo json_encode(["success" => false, "message" => "Error al guardar la compra: " . $stmt->error]);
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>