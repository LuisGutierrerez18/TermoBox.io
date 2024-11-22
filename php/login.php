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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TermoBox</title>
    <link rel="stylesheet" href="login.css"> <!-- Agrega un archivo CSS general -->
</head>
<body>
<div class="login-container">
        <h2>Inicia sesión</h2>
        <?php
        if (!empty($errorMessage)) {
            echo "<p class='error-message'>$errorMessage</p>";
        }
        ?>
        <form action="" method="POST">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="EMAIL" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="PASS" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
