
<!DOCTYPE html>
<html lang="es-MX">


<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/mercado.png">
    <title>Recuperar contraseña | Mi tiendita</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    
    
    <div id="contenedor">
        <form method="POST" action="">
            <div class="login_form">
                <h1 style="margin-bottom: 12px; color: #eabe69; text-align: center;">Recuperar contraseña</h1>
                <img src="../img/mercado.png" alt="logo">          
                <label for="email-usuario"><b>Correo electrónico o usuario:</b></label>
                <input id="input-email-usuario" type="text" placeholder="ejemplo@gmail.com" name="email-usuario" required>

                <button id="btn-recuperar" type="submit" style="margin-top:12px;" name="enviar">Recuperar contraseña</button>

                <div class="login-message" id="recuperar-message" aria-live="polite"></div>


                <button type="button" onclick="window.location.href='/login'" style="margin-top: 10px; background-color: #6b7280;">Volver al inicio de sesión</button>         
            </div>
        </form>
    </div>
</body>
</html>