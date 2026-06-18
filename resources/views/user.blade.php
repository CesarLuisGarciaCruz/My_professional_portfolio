<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/mercado.png">
    <title>Mi Tiendita | Perfil</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <form method="GET" action="/home" style="margin: 0;">
                <button type="submit" class="navbar_button">
                    <img src="../img/mercado.png" alt="Inicio">
                </button>
            </form>
        </div>

        <div class="nav-center">
            <h2 style="color:#a04d2f;"><strong>MI PERFIL</strong></h2>
        </div>

        <div class="nav-right">
            <form method="GET" action="/login" style="margin: 0; display: inline;">
                <input type="hidden" name="logout" value="true">
                <button type="submit" class="navbar_button">
                    <img src="../img/cerrar.png" alt="Cerrar sesión">
                </button>
            </form>
        </div>
    </nav>

    <div class="perfil-wrapper">
        <div class="perfil-header">
            <div class="perfil-avatar">
                <img src="../img/usuario.png" alt="Avatar">
            </div>
            <h1 class="perfil-nombre">$usuario</h1>
        </div>
        <div class="perfil-info">
            <h2>Información de la Cuenta</h2>
            <div class="info-item">
                <span class="info-label">Usuario:</span>
                <span class="info-valor">$usuario</span>
            </div>
            <div class="info-item">
                <span class="info-label">Cuenta creada:</span>
                <span class="info-valor">$fechaCreacion</span>
            </div>
            <div class="info-item">
                <span class="info-label">Último acceso:</span>
                <span class="info-valor">$ultimoAcceso</span>
            </div>
            <div class="info-item">
                <span class="info-label">Estado:</span>
                <span class="info-valor estado-activo">Activa</span>
            </div>
        </div>

        <!--botones-->
        <div class="perfil-acciones">
            <form method="GET" action="/home" style="margin: 0;">
                <button type="submit" class="btn-accion btn-primario">
                    Ir a Inicio
                </button>
            </form>

            <form method="GET" action="/car" style="margin: 0;">
                <button type="submit" class="btn-accion">
                    Ver mi Carrito
                </button>
            </form>

            <form method="GET" action="/forgot" style="margin: 0;">
                <button type="submit" class="btn-accion btn-secundario">
                    Cambiar Contraseña
                </button>
            </form>
        </div>
    </div>
</body>
</html>