<?php
require '../db/config.php';

$data = json_decode(file_get_contents("php://input"), true);

$sql = "UPDATE personas SET nombre=?, email=?, telefono=?, ciudad=?, profesion=?, edad=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->execute([
    $data['nombre'],
    $data['email'],
    $data['telefono'],
    $data['ciudad'],
    $data['profesion'],
    $data['edad'],
    $data['id']
]);
echo "Registro actualizado.";
