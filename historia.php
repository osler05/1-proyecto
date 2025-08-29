<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/historia.css" />
    <link rel="stylesheet" href="footer.css" />
    <title>SCAP</title>
</head>


<body>
    <div class="head">
        <nav class="navbar-login">
            <div class="nav-logo">
                <a href="./pagina de inicio.php">
                    <img src="./imagenes/logo.jpg" alt="Logo" />
                </a>
            </div>
            <div class="nav-right">
                <div class="dropdown">
                    <a
                      class="btn btn-nav"
                      href="servicios.html"
                      onclick="event.preventDefault(); document.getElementById('dropdown-menu').classList.toggle('show');"
                    >
                      Servicios <i class="fas fa-caret-down"></i>
                    </a>
                    <div id="dropdown-menu" class="dropdown-content">
                      <li><a href="./contratos.php">Contratos</a></li>
                      <li><a href="./calendario.php">Calendario de notas</a></li>
                      <li><a href="./pagos.php">Pagos</a></li>
                      <li><a href="./multas.php">Multas</a></li>
                    </div>
                </div>
            </div>
        </nav>
    </div> 

    <!-- Texto -->
    <footer class="footer">
        <div class="footer-content" style="margin-bottom: 12px;">

            <h1 style="text-align: center;">Historia del proyecto SCAP.</h1>

           <div class="historia-card">
    <p>
        <strong>¿por que se creo scap?</strong><br>
        La aplicación web SCAP fue creada para modernizar y optimizar el proceso de cobro del servicio de agua potable, reemplazando el método manual en Excel por una herramienta tecnológica eficiente que permita:
    </p>
    <ul>
        <li>Un control preciso de pagos y usuarios.</li>
        <li>Generación automática de reportes y recibos.</li>
        <li>Mayor agilidad en el registro, consulta y administración de datos.</li>
        <li>Reducción del tiempo de búsqueda de información y errores humanos.</li>
    </ul>

    <p><strong>Objetivo General</strong><br>
        Desarrollar e implementar una aplicación web que mejore la eficiencia en el cobro del servicio de agua potable, utilizando tecnología innovadora para optimizar la administración y control de pagos.
    </p>

    <p><strong>Objetivos Específicos</strong></p>
    <ul>
        <li>Analizar los requerimientos para el desarrollo de la aplicación web.</li>
        <li>Organizar la información del servicio de agua potable mediante registro de usuarios, costos, servicios y multas.</li>
        <li>Implementar un módulo de reportes para impresión de recibos.</li>
        <li>Incorporar un módulo de consulta con notificaciones, historial de consumo y métodos de pago diversos.</li>
    </ul>

    <p><strong>Misión</strong><br>
        Ofrecer soluciones digitales innovadoras y seguras para la gestión del cobro de agua potable, garantizando eficiencia, transparencia y facilidad de uso para administradores y usuarios.
    </p>

    <p><strong>Visión</strong><br>
        Consolidarse como una plataforma líder a nivel regional para la gestión y cobro de servicios de agua potable, reconocida por su innovación, confiabilidad y contribución a la modernización de procesos.
    </p>

    <p><strong>Metas</strong></p>
    <ul>
        <li>Reducir en un 70% el tiempo destinado a la gestión de cobros.</li>
        <li>Implementar el sistema en un 100% de las áreas administrativas del servicio.</li>
        <li>Lograr que al menos el 50% de los pagos se realicen en línea durante el primer año.</li>
        <li>Minimizar los errores en facturación a menos del 1% mensual.</li>
        <li>Garantizar la disponibilidad de la plataforma el 99% del tiempo.</li>
    </ul>
</div>

        </div>
    </footer>

    <a href="pagos.php" style="position:fixed; bottom:20px; right:20px; background:#2196F3; color:white; padding:12px 20px; font-size:16px; border:none; border-radius:8px; text-decoration:none; box-shadow:0 4px 8px rgba(0,0,0,0.2); cursor:pointer;">⬆ Regresar</a>

   

    <footer class="footer">
      <div class="footer-content">
        <p>© 2025 SCAP. Todos los derechos reservados.</p>
        <p>Desarrollado por Team SCAP</p>
      </div>
      <div class="footer-links">
        <a href="https://www.facebook.com/SCAP" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.twitter.com/SCAP" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/SCAP" target="_blank"><i class="fab fa-instagram"></i></a>
      </div>
      <div class="footer-nav">
        <a class="btn btn-nav" href="historia.php">Nuestra historia</a>
        <a class="btn btn-nav" href="compañia.php">Compañia</a>
      </div>
      <div class="footer-contacto">
        Contacto: <a href="mailto:web.solutions.company24@gmail.com">web.solutions.company24@gmail.com</a>
      </div>
    </footer>
</body>
</html>
