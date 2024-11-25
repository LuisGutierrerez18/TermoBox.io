<?php
// Incluir el archivo de conexión
include('connection.php');

// Verificar si se recibió la temperatura
if (isset($_GET['temperatura'])) {
    $data_sensor = $_GET['temperatura'];

    // Preparar la consulta SQL para evitar inyecciones
    $sql = "INSERT INTO Temperatura (data_sensor, hora) VALUES (?, NOW())";
    $stmt = $conn->prepare($sql);

    // Vincular el parámetro de data_sensor
    $stmt->bind_param("s", $data_sensor);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Dato insertado correctamente";
    } else {
        echo "Error al insertar dato: " . $stmt->error;
    }

    // Cerrar la declaración preparada
    $stmt->close();
} else {
    echo "No se recibió la temperatura";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>