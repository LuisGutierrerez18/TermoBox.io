<?php
    session_start();
    include 'connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TermoBox</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="content.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="Sidebar.css">
</head>
<body>
    <header>
        <div class="buttons-wrap">
            <!--<button id="About">About us</button>
            <button id="Contact">Contact</button> -->
            <?php if (isset($_SESSION['user'])): ?>
                <span>Bienvenido, <?php echo htmlspecialchars($_SESSION['user']); ?></span>
                <form action="logout.php" method="POST" style="display: inline;">
                    <button type="submit">Cerrar sesión</button>
                </form>
            <?php else: ?>
            <button id="Login" onclick="window.location.href='login.php'">Login</button>
            <?php endif; ?> 
        </div>

    </div>    
        <!--CheckBox para controlar la apertura del menu-->
        <input type="checkbox" id="menu-toggle">
        <label for = "menu-toggle" class="toggle">
            <span class="common TopLine"></span>
            <span class="common MiddleLine"></span>
            <span class="common BottomLine"></span>
        </label>

        <div class="Menu">
            <h1>Menu</h1>
            <ul>
                <li><a href="#">TermoBox</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

    </header>

    <div id="title">
        <h1>TermoBox</h1>
        <h2>Nunca más comeras frío</h1>
    </div>

    <script>
    document.getElementById('Login').addEventListener('click', function() {
        const loginForm = document.getElementById('login-form');
        if (loginForm.style.display === 'none') {
            loginForm.style.display = 'block';
        } else {
            loginForm.style.display = 'none';
        }
    });
    </script> 
<script src ="termoBox.js"></script> 
</body>
</html>