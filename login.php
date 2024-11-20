<?php
    include 'connection.php'; // Importa la conexión a la base de datos

    // Verifica si los datos del formulario han sido enviados
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['EMAIL'];
        $pass = $_POST['PASS'];

        // Consulta para validar el usuario
        $sql = "SELECT * FROM Usuario WHERE EMAIL = ? AND Pass = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        // Validar credenciales
        if ($result->num_rows > 0) {
            echo "Bienvenido, has iniciado sesión correctamente.";
            // Aquí podrías iniciar sesión con `session_start()`
        } else {
            echo "Correo o contraseña incorrectos.";
        }

        $stmt->close();
    }

    $conn->close();
?>