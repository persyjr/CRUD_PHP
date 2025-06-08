<?php
require '../db/config.php';

$sql = "SELECT * FROM personas ORDER BY id DESC";
$stmt = $conn->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
