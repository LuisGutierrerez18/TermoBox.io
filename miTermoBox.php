<?php
include 'temperatura.php'; 
include 'humedad.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miTermoBox</title>
    <link rel="stylesheet" href="content.css?v=2">
    <link rel="stylesheet" href="Sidebar.css?v=1">
</head>
<body>
    
    <header>
        <input type="checkbox" id="menu-toggle">
            <label for = "menu-toggle" class="toggle">
                <span class="common TopLine"></span>
                <span class="common MiddleLine"></span>
                <span class="common BottomLine"></span>
            </label>

        <div class="Menu">
            <h1>Menu</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="miTermoBox.php">TermoBox</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </header>
    <div id="tittle">
        <h1>Bienvenido a tu TermoBox</h1>
        <h2>Aquí podrás ver toda la información relacionada a tu TermoBox</h2>
    </div>
    <div id = "SeleccionComida">
        <h3>Selecciona tu comida</h3>
        <div class="tooltip-container">
            <span class="tooltip-btn">?</span>
            <div class="tooltip-text">En esta funcion podrás seleccionar la comida que deseas guardar y automaticamente te diremos cuál es la 
                temperatura y humedad ideal. <br> Dentro de las opciones podrás escoger el alimento que estarás guardando <br></div>
        </div>
        
            <h4>No te preocupes, nosostros te avisamos si tu alimento se encuentra dentro de los rangos ideales.</h4> 
        <form>
        <label for="comida">¿Que deseas guardar hoy? <br></label>
            <select name="comida" id="comida">
                <option value="Carne">Carne</option>
                <option value="Pasta">Pasta</option>
                <option value="Pescado">Pescado</option>
                <option value="Pollo">Pollo</option>
                <option value="Sopa">Sopa</option>
            </select>
        </form>
    </div>
    <div id="container">
        <div id="TemperaturaReal">
            <h3>Temperatura Real</h3>
            <h4><?php echo htmlspecialchars($temperatura); ?> °C</h4>
        </div>
        <div id="HumedadReal">
            <h3>Humedad Real</h3>
            <h4><?php echo htmlspecialchars($humedad); ?> %</h4>
        </div>
</div>
</body>
</html>