<?php
session_start();
session_destroy(); // Destruye todas las variables de sesión.
header("Location: index.php"); // Redirige a la página principal.
exit();
?>