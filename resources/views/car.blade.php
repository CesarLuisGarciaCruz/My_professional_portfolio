<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tiendita | Carrito</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../img/mercado.png">
</head>
<body>


    <nav class="navbar">
        <div class="nav-left">
            <button class="navbar_button" onclick="window.location.href='/home'">
                <img src="../img/mercado.png" alt="Inicio">
            </button>
        </div>

        <div class="nav-center">
            <h2 style="color:#a04d2f;"><strong>TIENDITA</strong></h2>
        </div>

        <div class="nav-right">
            <button class="navbar_button carrito-badge" onclick="window.location.href='/car'">
                <img src="../img/carrito.png" alt="Carrito">
                
            </button>
            <button class="navbar_button" onclick="window.location.href='/user'">
                <img src="../img/usuario.png" alt="Usuario">
            </button>
            <button class="navbar_button" onclick="window.location.href='/login'">
                <img src="../img/cerrar.png" alt="Cerrar sesión">
            </button>
        </div>
    </nav>

  
</body>
</html>