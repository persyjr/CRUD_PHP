    <?php
    $json = file_get_contents("php://input");

    header('Content-Type: application/json');
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require '../db/config.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'] ?? '';
        $email = $_POST['email'] ?? '';
        $telefono = $_POST['telefono'] ?? '';
        $direccion = $_POST['direccion'] ?? '';
        $ciudad = $_POST['ciudad'] ?? '';
        $ocupacion = $_POST['ocupacion'] ?? '';

        $query = "INSERT INTO personas (nombre, email, telefono, direccion, ciudad, ocupacion)
                VALUES (?, ?, ?, ?, ?, ?)";

        try {
            $stmt = $conn->prepare($query);
            $stmt->execute([$nombre, $email, $telefono, $direccion, $ciudad, $ocupacion]);

            echo json_encode(['success' => true, 'message' => 'Usuario guardado correctamente']);
        } catch (PDOException $e) {
            echo json_encode(['success' => false, 'message' => 'Error al guardar', 'error' => $e->getMessage()]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    }
    ?>
