<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Obtener y decodificar los datos JSON
$json = file_get_contents("php://input");

// Conexión a la base de datos y actualización
require '../db/config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'] ?? '';
        $email = $_POST['email'] ?? '';
        $telefono = $_POST['telefono'] ?? '';
        $direccion = $_POST['direccion'] ?? '';
        $ciudad = $_POST['ciudad'] ?? '';
        $ocupacion = $_POST['ocupacion'] ?? '';
        $id = $_POST['id'] ?? '';

        
        $query = "UPDATE personas SET nombre=?, email=?, telefono=?, direccion=?, ciudad=?, ocupacion=? WHERE id=?";
    try {
        $stmt = $conn->prepare($query);
        $stmt->execute([$nombre, $email, $telefono, $direccion, $ciudad, $ocupacion, $id]);
        echo json_encode(['success' => true, 'message' => 'Usuario guardado correctamente']);
        } catch (PDOException $e) {
            echo json_encode(['success' => false, 'message' => 'Error al guardar', 'error' => $e->getMessage()]);
        }
} else {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
}
?>