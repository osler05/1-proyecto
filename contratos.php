<?php
include ('conexion.php');

$con = connection();

$sql = "SELECT * FROM contratos";
$query = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/contratos2.css">
    <link rel="stylesheet" href="./css/contratos.css">
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
                    <a class="btn btn-nav" href="servicios.html" onclick="event.preventDefault(); document.getElementById('dropdown-menu').classList.toggle('show');">Servicios <i class="fas fa-caret-down"></i></a>
                    <div id="dropdown-menu" class="dropdown-content" style="display: none; position: absolute; background: #fff; min-width: 180px; box-shadow: 0 8px 16px rgba(0,48,96,0.13); z-index: 10; border-radius: 8px; overflow: hidden; border: 1px solid #b0c4de;">
                        <ul style="list-style: none; margin: 0; padding: 0;">
                            <li>
                                <a href="./contratos.php" style="display: block; padding: 14px 22px; color: #003060; text-decoration: none; font-weight: 500; transition: background 0.2s;">
                                    Contratos
                                </a>
                            </li>
                            <li>
                                <a href="./calendario.php" style="display: block; padding: 14px 22px; color: #003060; text-decoration: none; font-weight: 500; transition: background 0.2s;">
                                    Calendario de notas
                                </a>
                            </li>
                            <li>
                                <a href="./pagos.php" style="display: block; padding: 14px 22px; color: #003060; text-decoration: none; font-weight: 500; transition: background 0.2s;">
                                    Pagos
                                </a>
                            </li>
                            <li>
                                <a href="./multas.php" style="display: block; padding: 14px 22px; color: #003060; text-decoration: none; font-weight: 500; transition: background 0.2s;">
                                    Multas
                                </a>
                            </li>
                        </ul>
                    </div></li>
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
       
<div  class="agregar-contrato" style="
    max-width: 900px;
    margin: 40px auto;
    padding: 32px 40px;
    border: 1px solid #003060;
    border-radius: 16px;
    background: linear-gradient(120deg, #f4f8fb 60%, #eaf0fa 100%);
    box-shadow: 0 8px 32px rgba(0,48,96,0.10);
">
    <h2 style="text-align:center; color:#003060; margin-bottom: 32px; font-size:2em;">Agregar Contrato</h2>
    <form action="insertar_contrato.php" method="POST" style="display: flex; flex-direction: column; gap: 24px;">
    <div style="display: flex; gap: 32px; flex-wrap: wrap;">
        <input type="hidden" name="id" value="">

        <div style="flex:1; min-width: 250px;">
            <label for="nombre" style="display:block; margin-bottom:8px; font-weight:600; color:#003060;">Nombre completo del cliente:</label>
            <!-- agregado pattern para no permitir números -->
            <input type="text" id="nombre" name="nombre" required maxlength="30" pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" title="El nombre no puede contener números" style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
        </div>

        <div style="flex:1; min-width: 250px;">
            <label for="direcion" style="display:block; margin-bottom:8px; font-weight:600; color:#003060;">Dirección(cliente):</label>
            <input type="text" id="direcion" name="direcion" required style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
        </div>

        <div style="flex:1; min-width: 250px;">
            <label for="numero" style="display:block; margin-bottom:8px; font-weight:600; color:#003060;">Número de telefono:</label>
            <input type="tel" id="numero" name="numero" required maxlength="10" pattern="[0-9]{10}" style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
        </div>

        
        <div style="flex:1; min-width: 250px;">
            <label for="tipo_contrato" style="display:block; margin-bottom:8px; font-weight:600; color:#003060;">
                Tipo de contrato:
            </label>
            <select id="tipo_contrato" name="tipo_contrato" required 
                style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
                <option value="">-- Selecciona un contrato --</option>
                <option value="Contrato residencial">Contrato residencial - Agua potable para viviendas particulares, incluye consumo básico ($1200)</option>
                <option value="Contrato comercial">Contrato comercial - Agua potable para negocios, industrias y comercios ($2500)</option>
                <option value="Contrato público">Contrato público - Agua potable para instituciones públicas como escuelas y hospitales ($2000)</option>
                <option value="Contrato agrícola">Contrato agrícola - Agua potable para riego con restricciones para sostenibilidad ($4500)</option>
            </select>
        </div>
        

        <div style="flex:1; min-width: 250px;">
            <label for="fecha_inicio" style="display:block; margin-bottom:8px; font-weight:600; color:#003060;">Fecha de Inicio(contrato):</label>
            <!-- agregado value con fecha actual y bloqueo de escritura -->
            <input type="date" id="fecha_inicio" name="fecha_inicio" required value="<?php echo date('Y-m-d'); ?>" onkeydown="return false;" style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
        </div>

        <div style="flex:1; min-width: 250px;">
            <label for="monto" style="display:block; margin-bottom:8px; font-weight:600; color:#003060;">Monto:</label>
            <input type="int" id="monto" name="monto" required readonly style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de; background:#f0f0f0;">
        </div>
    </div>

    <label for="descripccion" style="display:block; margin-bottom:8px; font-weight:600; color:#003060;">Descripción:</label>
    <textarea id="descripccion" name="descripccion" rows="3" style="width:100%; margin-bottom:24px; padding:10px; border-radius:6px; border:1px solid #b0c4de;"></textarea>

    <div style="text-align:center;">
        <button type="submit" style="background:#003060; color:#fff; padding:12px 36px; border:none; border-radius:8px; font-size:1.1em; font-weight:600; cursor:pointer; box-shadow:0 2px 8px rgba(0,48,96,0.10); transition:background 0.2s;">
            Agregar
        </button>
        <h1 style="color:#003060; margin-top:20px; font-size:1.2em;">Consultar contrato en la parte inferior</h1>
    </div>

    
    
</form>
</div>

<div id="listaContratos" style="max: width 1000px;px; margin:40px auto 0 auto; padding:24px; border-radius:12px; background:#f8fbff; box-shadow:0 2px 12px rgba(0,48,96,0.07);">
    <h3 style="color:#003060; margin-bottom:18px;">Contratos agregados</h3>
   <table id="contratosUl" style="width:100%; border-collapse:collapse; margin-top:16px;">
    <thead>
        <tr style="background-color:#003060; color:#fff;">
            <th style="padding:12px; text-align:left;">ID Cliente</th>
            <th style="padding:12px; text-align:left;">Nombre</th>
            <th style="padding:12px; text-align:left;">Dirección</th>
            <th style="padding:12px; text-align:left;">Número de contacto</th>
            <th style="padding:12px; text-align:left;">Tipo de contrato</th>
            <th style="padding:12px; text-align:left;">Fecha</th>
            <th style="padding:12px; text-align:left;">Monto</th>
            <th style="padding:12px; text-align:left;">Descripción</th>
            <th></th>
            <th></th>

            <button type="button" onclick="window.print()" style="background:#007BFF;color:#fff;border:none;padding:6px 12px;border-radius:6px;cursor:pointer;font-size:14px;font-weight:500;">Imprimir</button>

        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_array($query)): ?>
            <tr style="background-color:#f0f4f8; color:#003060;">
                <td><?php echo htmlspecialchars($row['id']); ?></td>
                <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                <td><?php echo htmlspecialchars($row['direcion']); ?></td>
                <td><?php echo htmlspecialchars($row['numero']); ?></td>
                <td><?php echo htmlspecialchars($row['tipo_contrato']); ?></td>
                <td><?php echo htmlspecialchars($row['fecha_inicio']); ?></td>
                <td><?php echo htmlspecialchars($row['monto']); ?></td>
                <td><?php echo htmlspecialchars($row['descripccion']); ?></td>
                <td>
                    <a href="update_contratos.php?id=<?php echo htmlspecialchars($row['id']); ?>" style="background:#1976d2; color:#fff; padding:8px 18px; border-radius:6px; text-decoration:none; font-weight:600; transition:background 0.2s; box-shadow:0 1px 4px rgba(25,118,210,0.08); display:inline-block;">
                        Editar
                    </a>
                </td>
                <td>
                    <a href="delete_contratos.php?id=<?php echo htmlspecialchars($row['id']); ?>" style="background:#d32f2f; color:#fff; padding:8px 18px; border-radius:6px; text-decoration:none; font-weight:600; transition:background 0.2s; box-shadow:0 1px 4px rgba(211,47,47,0.08); display:inline-block;">
                        Eliminar
                    </a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</div>

<a href="contratos.php" style="position:fixed; bottom:20px; right:20px; background:#2196F3; color:white; padding:12px 20px; font-size:16px; border:none; border-radius:8px; text-decoration:none; box-shadow:0 4px 8px rgba(0,0,0,0.2); cursor:pointer;">⬆ Regresar</a>

   
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

<script>
    document.getElementById('tipo_contrato').addEventListener('change', function() {
        let montoInput = document.getElementById('monto');
        let descInput = document.getElementById('descripccion');

        switch(this.value) {
            case 'Contrato residencial':
                montoInput.value = 1200;
                descInput.value = "Agua potable para viviendas particulares, incluye consumo básico.";
                break;
            case 'Contrato comercial':
                montoInput.value = 2500;
                descInput.value = "Agua potable para negocios, industrias y comercios.";
                break;
            case 'Contrato público':
                montoInput.value = 2000;
                descInput.value = "Agua potable para instituciones públicas como escuelas y hospitales.";
                break;
            case 'Contrato agrícola':
                montoInput.value = 4500;
                descInput.value = "Agua potable para riego con restricciones para sostenibilidad.";
                break;
            default:
                montoInput.value = '';
                descInput.value = '';
        }
    });
    </script>

    
</body>
</html>
