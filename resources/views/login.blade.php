<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/mercado.png">
    <title>Mi tiendita</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div id="contenedor">
    <form method="POST" action="">
        <div class="login_form">
            <h1 style="margin-bottom: 12px; color: #eabe69; text-align: center;">¡Bienvenido a la tiendita!</h1>
            <img src="../img/mercado.png" alt="logo">

            <label for="nombre"><b>Usuario:</b></label>
            <input id="input-usuario" type="text" placeholder="ejemplo@gmail.com" name="nombre" required>

            <label for="psw"><b>Contraseña:</b></label>
            <input id="input-password" type="password" placeholder="Contraseña" name="psw" required>

            <button id="btn-login" type="submit" style="margin-top:12px;">Iniciar sesión</button>


            <button type="button" class="login_form button"
                    onclick="window.location.href='forgotpass.php'"
                    style="margin-top: 10px; background-color: #a0522d;">¿Olvidaste tu contraseña?</button>

            <button type="button"
                    onclick="window.location.href='newuser.php'"
                    style="margin-top: 10px; background-color: #a0522d;">¿Primera vez aquí? Crea tu cuenta</button>
        </div>
    </form>
</div>

</body>
</html>
