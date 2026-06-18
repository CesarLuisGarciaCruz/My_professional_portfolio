<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/mercado.png">
    <title>Nuevo producto - Mi tiendita</title>
    <link rel="stylesheet" href="../css/styles.css">
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

    <div id="item-container">
        <form method="POST" action="">
            
            <div class="item_form">
                <h1 style="margin-bottom: 12px; color: #eabe69; text-align: center;">Registrar nuevo producto</h1>
                <img src="../img/mercado.png" alt="logo">
                
                <label for="Producto"><b>Nombre del producto:</b></label>
                <input id="input-producto" type="text" placeholder="¿Cuál es el nuevo producto?" name="producto" required>

                <label for="precio"><b>Precio $:</b></label>
                <input id="input-precio" type="number" placeholder="$0.00" name="precio" style="width: 330px; height: 40px;" required>

                <label for="desc"><br><b>Descripción del producto</b></label>
                <input id="input-desc" type="text" placeholder="Descripción.." name="desc" required>

                <label for="p-img"><b>Imagen del producto:</b></label>
                    <input type="file" name="imagen" id="imagen">
                <br><br><br>
                <button type="submit" value="Subir Imagen" name="enviar" style="background-color: #a04d2f">Subir imagen</button>
                <br>
                <button id="btn-registrar" name= "enviar" type="submit" style="margin-top:12px;">Registrar producto</button>

                    <!-- Mostrar el mensaje de error o éxito -->
                    <?php if (!empty($error)): ?>
                        <p style="color: red;"><?php echo $error; ?></p>
                    <?php endif; ?>

                <div class="login-message" id="registro-message" aria-live="polite"></div>

                <button type="button" onclick="window.location.href='/login'" style="margin-top: 10px; background-color: #806b6bff;">Cancelar</button>
            </div>
        </form>

        <section class="_a6-g" aria-labelledby="u_0_ee0_y+"><h2 class="_2ph_ _a6-h _a6-i" id="u_0_ee0_y+"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Cesar Gar Cía</font></font></font></font></h2><div class="_2ph_ _a6-p"><div><div></div><div>Hola Frank, sé que es temprano pero te queria pedir tu ayuda ahora si ¿Podrias mandarme una copia de seguridad de nuestra conversacion por favor?</div><div></div><div></div><div><ul class="_a6-q"><li><span><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">👍Fran Hoshino</font></font></font></font></span></li></ul></div></div></div><footer class="_3-94 _a6-o"><div class="_a72d"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">9 de octubre de 2025, 8:09:15 a. m.</font></font></div></footer></section>
    </div>

</body>
</html>