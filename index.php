
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./index.css">
    <link rel="stylesheet" href="footer.css">
    <title>SCAP</title>
</head>
<body>

    <div class="head">
        <nav class="navbar-login">
            <div class="nav-logo">
                <a href="./index.php">
                <img src="./imagenes/logo.jpg" alt="Logo" style="height: 200px;">
                                </a>
            </div>
            <div class="nav-right">
                <script>
                    document.addEventListener('click', function(e) {
                        var dropdown = document.getElementById('dropdown-menu');
                        if (!e.target.closest('.dropdown')) {
                            dropdown.classList.remove('show');
                            dropdown.style.display = 'none';
                        } else if (dropdown.classList.contains('show')) {
                            dropdown.style.display = 'block';
                        } else {
                            dropdown.style.display = 'none';
                        }
                    });
                    document.querySelector('.dropdown > a').addEventListener('click', function() {
                        var dropdown = document.getElementById('dropdown-menu');
                        if (dropdown.classList.contains('show')) {
                            dropdown.style.display = 'block';
                        } else {
                            dropdown.style.display = 'none';
                        }
                    });
                </script>
                <style>
                    .dropdown { position: relative; display: inline-block; }
                    .dropdown-content { display: none; }
                    .dropdown-content.show { display: block !important; }
                    .dropdown-content a:hover { background-color: #f1f1f1; }
                </style></div>
            
            </div>
        </nav>
    </div>
    <footer class="footer">
        <meta charset="UTF-8"> <!-- Define la codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Permite que la página se adapte a dispositivos móviles -->
    <title>Inicio de Sesión SCAP</title> <!-- Título de la página -->
    <link rel="stylesheet" href="./prueba.css"> <!-- Enlace al archivo CSS -->
    <div style="display: flex; justify-content: center; align-items: flex-start; min-height: 0; margin-top: -300px;">
        <div style="background: #fff; border-radius: 18px; box-shadow: 0 4px 24px rgba(0,48,96,0.10); padding: 50px 32px 28px 32px; display: flex; flex-direction: column; align-items: center; min-width: 340px; max-width: 370px;">
            <div class="logo" style="margin-bottom: 18px;">
                <img src="./imagenes/logo.jpg" alt="Logotipo SCAP" style="max-width: 120px;">
            </div>
            <form action="validar.php" method="post" style="width: 100%; display: flex; flex-direction: column; align-items: stretch;">
                <label for="usuario" style="color: #003060; font-weight: bold; margin-bottom: 6px;">Usuario</label>
                <input type="text" name="usuario" maxlength="8" oninput="if(this.value.length > 8) this.value = this.value.slice(0,8);" style="margin-bottom: 14px; padding: 8px; border-radius: 6px; border: 1px solid #003060;">
                
                <label for="contrasena" style="color: #003060; font-weight: bold; margin-bottom: 6px;">Contraseña</label>
                <input type="password" name="contraseña" style="margin-bottom: 14px; padding: 8px; border-radius: 6px; border: 1px solid #003060;">
                
                
                <div class="buttons" style="display: flex; justify-content: center;">
                    <button type="submit" class="login-button" style="background: #003060; color: #fff; border: none; border-radius: 6px; padding: 10px 0; width: 100%; font-weight: bold; font-size: 1em; cursor: pointer;">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </div>
        <div class="footer-content" style="margin-bottom: 12px;">
            <p style="margin: 0 0 6px 0;">© 2025 SCAP. Todos los derechos reservados.</p>
            <p style="margin: 0;">Desarrollado por Team SCAP</p>
        </div>
        </footer>

</body>
</html>