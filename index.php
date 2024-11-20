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
            <button id="About">About us</button>
            <button id="Contact">Contact</button>
            <button id="Login">Login</button>
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
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

    </header>

    <div id="title">
        <h1>TermoBox</h1>
        <h2>Nunca más comeras frío</h1>
    </div>

    
        
</body>
</html>