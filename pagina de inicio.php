
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <link rel="stylesheet" href="footer.css">
    <title>SCAP</title>
</head>
<body>

    <div class="head">
        <nav class="navbar-login">
            <div class="nav-logo">
                <a href="./pagina de inicio.php">
                <img src="./imagenes/logo.jpg" alt="Logo" style="height: 200px;">
                </a>
            </div>
            <div class="nav-right">
                <div class="dropdown">
                    <a class="btn btn-nav" href="./SERVICIOS/" onclick="event.preventDefault(); document.getElementById('dropdown-menu').classList.toggle('show');">Servicios <i class="fas fa-caret-down"></i></a>
                    <div id="dropdown-menu" class="dropdown-content" style="display: none; position: absolute; background: #fff; min-width: 180px; box-shadow: 0 8px 16px rgba(0,0,0,0.18); z-index: 10; border-radius: 8px; overflow: hidden; border: 1px solid #e0e0e0;">
                        <ul style="list-style: none; margin: 0; padding: 0;">
                            <li>
                                <a href="./contratos.php" style="display: block; padding: 12px 20px; color: #003060; text-decoration: none; font-weight: 500; transition: background 0.2s;">
                                    Contratos
                                </a>
                            </li>
                            <li>
                                <a href="./calendario.php" style="display: block; padding: 12px 20px; color: #003060; text-decoration: none; font-weight: 500; transition: background 0.2s;">
                                    Calendario de notas
                                </a>
                            </li>
                            <li>
                                <a href="./pagos.php" style="display: block; padding: 12px 20px; color: #003060; text-decoration: none; font-weight: 500; transition: background 0.2s;">
                                    Pagos
                                </a>
                            </li>
                            <li>
                                <a href="./multas.php" style="display: block; padding: 12px 20px; color: #003060; text-decoration: none; font-weight: 500; transition: background 0.2s;">
                                    Multas
                                </a>
                            </li>
                        </ul>
                    </div>
                    <style>
                        #dropdown-menu a:hover {
                            background: #e3f2fd;
                            color: #1976d2;
                        }
                    </style>
                </div>
                <a class="btn btn-nav" href="logout.php" style="margin-left: 18px; color: #d32f2f; font-weight: bold;">
                <a href="logout.php">Cerrar sesión</a>

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
                </style>
            </div>
        </nav>
    </div>
            
            </div>
        </nav>
    </div> 

    <!-- Galería central con cambio de imagen al mover el cursor -->
    <header class="content" style="display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 60vh;">
        <h2 class="title" style="margin: 0 0 24px 0; color: #fff; font-size: 2.7em; letter-spacing: 4px; font-weight: 800; text-align: center;">
            TEAM SCAP
        </h2>
        <p style="max-width: 700px; margin: 0 auto; color: #fff; font-size: 1.25em; text-align: justify; border-radius: 14px; padding: 24px 20px; font-weight: 500; background: rgba(0,0,0,0.15); box-shadow: 0 2px 12px rgba(100,181,246,0.08);">
            Bienvenido al Sistema de Cobro de Agua Potable (SCAP), donde tu comodidad y satisfacción son nuestra prioridad. Aquí podrás gestionar tus servicios de agua de manera rápida y sencilla, desde el pago de facturas hasta la consulta de tu historial de consumo.
        </p>
    </header>
    <!-- Nueva barra de navegación abajo -->
    <section>
        
        <img src="./imagenes/1..jpg">
        <img src="./imagenes/2..jpg">
        <img src="./imagenes/3..jpg">
    </section>
    <footer class="footer">
        <div class="footer-content" style="margin-bottom: 12px;">
            <p style="margin: 0 0 6px 0;">© 2025 SCAP. Todos los derechos reservados.</p>
            <p style="margin: 0;">Desarrollado por Team SCAP</p>
        </div>
        <div class="footer-links" style="margin-top: 30px;">
            <a href="https://www.facebook.com/SCAP" target="_blank" >
            <i class="fab fa-facebook" style="font-size: 2.2em; color: #003060;"></i>
            </a>
            <a href="https://www.twitter.com/SCAP" target="_blank">
            <i class="fab fa-twitter" style="font-size: 2.2em; color: #003060;"></i>
            </a>
            <a href="https://www.instagram.com/SCAP" target="_blank">
            <i class="fab fa-instagram" style="font-size: 2.2em; color: #003060;"></i>
            </a>
        </div>
        <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 20px;">
            <a class="btn btn-nav" href="historia.php" style="margin-top: 10px; color: #003060; text-decoration: none; font-weight: bold;">
            Nuestra historia
            </a>
            <a href="#" style="margin-top: 10px; color: #003060; text-decoration: none; font-weight: bold;">
            <a class="btn btn-nav" href="compañia.php" style="margin-top: 10px; color: #003060; text-decoration: none; font-weight: bold;">
            Compañia
            </a>
        </div>
        <div style="text-align: center; margin-top: 18px; color: #003060; font-weight: bold;">
            Contacto: <a href="" style="color: #003060; text-decoration: underline;">web.solutions.company24@gmail.com</a>
        </div>
        </footer>

         <a href="pagina de inicio.php" style="position:fixed; bottom:20px; right:20px; background:#2196F3; color:white; padding:12px 20px; font-size:16px; border:none; border-radius:8px; text-decoration:none; box-shadow:0 4px 8px rgba(0,0,0,0.2); cursor:pointer;">⬆ Regresar</a>

</body>
</html>