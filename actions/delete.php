<?php
require '../db/config.php';

$data = json_decode(file_get_contents("php://input"), true);

$sql = "DELETE FROM personas WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$data['id']]);
echo "Registro eliminado.";
