<?php
require '../db/config.php';

$data = json_decode(file_get_contents("php://input"), true);

$sql = "INSERT INTO personas (nombre, email, telefono, ciudad, profesion, edad) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([
    $data['nombre'],
    $data['email'],
    $data['telefono'],
    $data['ciudad'],
    $data['profesion'],
    $data['edad']
]);
echo "Registro guardado.";
