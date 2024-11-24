<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miTermoBox</title>
    <link rel="stylesheet" href="content.css?v=1">
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
        <p>En esta funcion podrás seleccionar la comida que deseas guardar y automaticamente te diremos cuál es la 
            temperatura y humedad ideal. <br> Dentro de las opciones podrás escoger si tu alimento entra en alguna de las 
            siguientes categorias: <br>
            <br> 
            Carne <br>
            Pasta <br>
            Pescado <br>
            Pollo <br>
            Sopa <br>

            <br> 
            Tranquilo, no te preocupes, nosostros te avisamos si tu alimento se encuentra dentro de los rangos ideales. 
        </p>
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
    <div id = "TemperaturaReal">
        <h3>Esta es la Temperatura en tiempo real</h3>
    </div>
    <div id = "HumedadReal">
        <h3>Esta es la Humedad en tiempo real</h3>
    </div>
</body>
</html>