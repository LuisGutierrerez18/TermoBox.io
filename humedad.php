<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'connection.php'; // Archivo que conecta a la base de datos

// Consulta para obtener la temperatura
$sql = "SELECT data_sensor FROM Humedad WHERE id = 1"; 
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $humedad = $row['data_sensor'];
} else {
    $humedad = "No disponible";  // Valor por defecto si no hay resultados
}
?>