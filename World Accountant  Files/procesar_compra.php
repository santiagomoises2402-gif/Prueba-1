<?php
// Habilitar reportes de error
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Configurar cabeceras para manejar CORS
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Incluir archivo de conexión
include 'conexion.php';

// Función de registro de errores
function logError($mensaje) {
    file_put_contents('error_log.txt', date('[Y-m-d H:i:s] ') . $mensaje . PHP_EOL, FILE_APPEND);
}

// Obtener datos de la solicitud
$json = file_get_contents('php://input');
logError("Datos recibidos: " . $json);

// Decodificar JSON
$data = json_decode($json, true);

// Validar datos
if ($data === null) {
    $errorMsg = "Error al decodificar JSON: " . json_last_error_msg();
    logError($errorMsg);
    echo json_encode([
        'status' => 'error', 
        'message' => $errorMsg
    ]);
    exit;
}

// Extraer datos
$total = $data['total'] ?? null;
$productos = $data['productos'] ?? [];
$codigo_descuento = $data['codigo_descuento'] ?? null;

// Validar total
if ($total === null) {
    logError("Total no proporcionado");
    echo json_encode([
        'status' => 'error', 
        'message' => 'Total es requerido'
    ]);
    exit;
}

// Convertir productos a cadena
$productos_str = is_array($productos) ? implode(', ', $productos) : $productos;

// Preparar consulta SQL
try {
    $stmt = $conn->prepare("INSERT INTO ventas (total, productos, codigo_descuento) VALUES (?, ?, ?)");
    $stmt->bind_param("dss", $total, $productos_str, $codigo_descuento);

    if ($stmt->execute()) {
        $response = [
            'status' => 'success',
            'message' => 'Compra registrada exitosamente',
            'ticket_id' => $stmt->insert_id
        ];
        logError("Compra registrada: Ticket ID " . $stmt->insert_id);
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Error al registrar la compra: ' . $stmt->error
        ];
        logError("Error al registrar compra: " . $stmt->error);
    }

    echo json_encode($response);
    $stmt->close();
} catch (Exception $e) {
    logError("Excepción: " . $e->getMessage());
    echo json_encode([
        'status' => 'error',
        'message' => 'Error en la transacción: ' . $e->getMessage()
    ]);
}

$conn->close();

?>