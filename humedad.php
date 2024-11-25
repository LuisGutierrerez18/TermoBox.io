<?php
include 'connection.php'; // Archivo que conecta a la base de datos

// Consulta para obtener la temperatura más reciente
$sql = "SELECT data_sensor FROM Humedad ORDER BY hora DESC LIMIT 1"; 
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $humedad = $row['data_sensor'];
} else {
    $humedad = "No disponible";  // Valor por defecto si no hay resultados
}
?>