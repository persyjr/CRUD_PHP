<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "Procesando formulario...<bcr>";
echo "Acción no permitida";
require '../db/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre    = $_POST['nombre'];
    $email     = $_POST['email'];
    $telefono  = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $ciudad    = $_POST['ciudad'];
    $pais      = $_POST['pais'];

    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, telefono, direccion, ciudad, pais) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nombre, $email, $telefono, $direccion, $ciudad, $pais);

    if ($stmt->execute()) {
        echo "OK";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
