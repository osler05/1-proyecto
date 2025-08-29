<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/compañia.css">
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
                    <a
                      class="btn btn-nav"
                      href="servicios.html"
                      onclick="event.preventDefault(); document.getElementById('dropdown-menu').classList.toggle('show');"
                    >
                      Servicios <i class="fas fa-caret-down"></i>
                    </a>
                    <div id="dropdown-menu" class="dropdown-content" style="position: absolute; right: 0; background: #fff; min-width: 180px; box-shadow: 0 8px 16px rgba(0,0,0,0.15); border-radius: 8px; z-index: 1000; padding: 10px 0;">
                        <ul style="list-style: none; margin: 0; padding: 0;">
                            <li><a href="./contratos.php" style="display: block; padding: 10px 24px; color: #003060; text-decoration: none; font-weight: 500;">Contratos</a></li>
                            <li><a href="./calendario.php" style="display: block; padding: 10px 24px; color: #003060; text-decoration: none; font-weight: 500;">Calendario de notas</a></li>
                            <li><a href="./pagos.php" style="display: block; padding: 10px 24px; color: #003060; text-decoration: none; font-weight: 500;">Pagos</a></li>
                            <li><a href="./multas.php" style="display: block; padding: 10px 24px; color: #003060; text-decoration: none; font-weight: 500;">Multas</a></li>
                        </ul>
                    </div>
                </div>
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

    <meta charset="UTF-8"> <!-- define la codificación de caracteres -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- define el ancho de la página -->

    <title>Historia SCAP</title>
    <link rel="stylesheet" href="estilo.css"> <!-- Enlace a la hoja de estilos CSS -->
</head>
<body>

   
 
    <footer class="footer">
        <div class="footer-content" style="margin-bottom: 12px;">
    
            
 <img class="img" src="./imagenes/img.6.gif" alt="Contenido sin fondo" style="max-width: 300px; height: auto; border-radius: 20px; display: block; margin: 0 auto 24px auto;">
         

   
   
     <h1 style="text-align: center; font-style:italic; ">Nosotros </h1>

    <div style="position: relative; z-index: 10; display: flex; justify-content: center; align-items: center; min-height: 0; margin: 16px 40px 40px 40px;">
        <p style="text-align: center; max-width: 800px; margin: 0; padding: 32px; background: #fff; border-radius: 20px; box-shadow: 0 8px 32px rgba(0,0,0,0.15);">
           "Web Solutions Company" es una empresa especializada en ofrecer soluciones
            digitales integrales enfocadas en el desarrollo y optimización de proyectos web. 
            Su nombre refleja claramente su propósito: brindar servicios tecnológicos que respondan 
            a las necesidades del entorno digital. A través de un enfoque profesional
             y orientado a resultados, esta compañía se posiciona como un aliado estratégico para negocios que buscan 
             mejorar su presencia en línea, implementar plataformas digitales o modernizar sus sistemas web.
              El uso del término "Solutions" destaca su capacidad para adaptarse a diferentes retos, proporcionando 
              respuestas a medida para cada cliente.
        </p>
    </div>

      <img class="img" src="./imagenes/img.9.gif" alt="Contenido sin fondo" style="max-width: 300px; height: auto; border-radius: 20px; float:left; display: block; margin: 0 auto 24px auto;">
      <img class="img" src="./imagenes/img.8.gif" alt="Contenido sin fondo" style="max-width: 300px; height: auto; border-radius: 20px; float:right; display: block; margin: 0 auto 24px auto;">
  <img class="img" src="./imagenes/img.11.gif" alt="Contenido sin fondo" style="max-width: 300px; height: auto; border-radius: 20px; display: block; margin: 0 auto 24px auto;"><br>

   <a href="pagos.php" style="position:fixed; bottom:20px; right:20px; background:#2196F3; color:white; padding:12px 20px; font-size:16px; border:none; border-radius:8px; text-decoration:none; box-shadow:0 4px 8px rgba(0,0,0,0.2); cursor:pointer;">⬆ Regresar</a>



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
            <a href="compañia.php" style="margin-top: 10px; color: #003060; text-decoration: none; font-weight: bold;">
            compañia
            </a>
        </div>
        <div style="text-align: center; margin-top: 18px; color: #003060; font-weight: bold;">
            Contacto: <a href="web.solutions.company24@gmail.com" style="color: #003060; text-decoration: underline;">web.solutions.company24@gmail.com</a>
        </div>
        </footer>


        
       <meta charset="UTF-8"> <!-- define la codificación de caracteres -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- define el ancho de la página -->

    <title>Historia SCAP</title>
    <link rel="stylesheet" href="Estilos.css"> <!-- Enlace a la hoja de estilos CSS -->
</head>
<body>