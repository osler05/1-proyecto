<?php
include ('conexion.php');

$con = connection();

$sql = "SELECT * FROM multas";
$query = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/multas.css" />
    <link rel="stylesheet" href="footer.css" />
    <title>SCAP</title>
</head>
<body>
    <div class="head">
        <nav class="navbar-login">
            <div class="nav-logo">
                <a href="./pagina de inicio.php">
                    <img src="./imagenes/logo.jpg" alt="Logo" style="height: 200px"/>
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

    <!-- FORMULARIO MULTAS -->
    <div id="contenedorMulta">
      <h2>Registrar Multa</h2>
      <form action="insertar_multa.php" method="POST" id="formMulta" >
        <div class="formulario-grid">
          <div>
            <label for="id">Id de multa</label>
            <input type="int" id="cliente" name="cliente" required maxlength="10" pattern="[0-9]+">
            
          </div>
          <div>
            <label for="nombre">Nombre del multado </label>
            <input type="text" id="nombre" name="nombre" required maxlength="30" pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" title="El nombre no puede contener números" style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
            
          </div>
          <div>
            <label for="fecha">Fecha de la multa:</label>
            <input type="date" id="fecha" name="fecha" required value="<?php echo date('Y-m-d'); ?>" onkeydown="return false;" style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
            
          </div>
          <div>
           <label for="tipo">Tipo de Multa:</label>
          <select id="tipo_multa" name="tipo_multa" required 
                style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
                <option value="">-- Selecciona una multa --</option>
                <option value="Desperdicio De Agua">Desperdicio De Agua</option>
                <option value="Conexiones Ilegales">Conexiones Ilegales </option>
                <option value="Pagos Tardios">Pagos Tardios</option>
                <option value="Contaminacion del agua">Contaminacion del agua</option>
                <option value="Consumo Excesivo">Consumo Excesivo</option>
                <option value="Daños a la Infraestructura">Daños a la Infraestructura</option>  
                <option value="Incumplimiento De Reglas">Incumplimiento De Reglas</option>
                <option value="Obstrucción a Inspecciones">Obstrucción a Inspecciones</option>
              </select>
         </div>
          <div>
            <label for="monto">Costo de la multa:</label>
            <input type="text" id="monto" name="monto" readonly required 
              style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;"/>
          </div>
        </div>
        <label for="descripcion">Descripcción:</label>
        <textarea id="descripccion" name="descripccion" rows="3" readonly
                style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;"></textarea>
        
        <div class="boton-centro">
          <button type="submit">Agregar Multa</button>
          <h1 style="color:#003060; margin-top:20px; font-size:1.2em;">Consultar multa en la parte inferior</h1>
        </div>
      </form>
    </div>

    <!-- TABLA DE REGISTRO -->
    <div  id="listamultas" style="max-width:900px; margin:40px auto 0 auto; padding:24px; border-radius:12px; background:#f8fbff; box-shadow:0 2px 12px rgba(0,48,96,0.07);">
      <h3 style="color:#003060; margin-bottom:18px";> Registro de Multas</h3>
      <table id="tablaMultas">
        <tr style="background-color:#003060; color:#fff;">
                <th style="padding:12px; text-align:left;">Id de multa</th>
                <th style="padding:12px; text-align:left;">Nombre</th>
                <th style="padding:12px; text-align:left;">Fecha</th>
                <th style="padding:12px; text-align:left;">Tipo de multa</th>
                <th style="padding:12px; text-align:left;">Costo</th>
                <th style="padding:12px; text-align:left;">Descripcción</th>
                <th></th>
                <th></th>

                <button type="button" onclick="window.print()" style="background:#007BFF;color:#fff;border:none;padding:6px 12px;border-radius:6px;cursor:pointer;font-size:14px;font-weight:500;">Imprimir</button>

            </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_array($query)): ?>
            <tr>
              <th><?php echo htmlspecialchars($row['id']); ?></th>
              <th><?php echo htmlspecialchars($row['nombre']); ?></th>
              <th><?php echo htmlspecialchars($row['fecha']); ?></th>
              <th><?php echo htmlspecialchars($row['tipo_multa']); ?></th>
              <th><?php echo htmlspecialchars($row['monto']); ?></th>
              <th><?php echo htmlspecialchars($row['descripccion']); ?></th>
              <th>
                    <a href="update_multas.php?id=<?php echo htmlspecialchars($row['id']); ?>" 
                       style="background:#1976d2; color:#fff; padding:8px 18px; border-radius:6px; text-decoration:none; font-weight:600; transition:background 0.2s; box-shadow:0 1px 4px rgba(25,118,210,0.08); display:inline-block;">
                        Editar
                    </a>
                </th>
                <th>
                    <a href="delete_multas.php?id=<?php echo htmlspecialchars($row['id']); ?>" 
                       style="background:#d32f2f; color:#fff; padding:8px 18px; border-radius:6px; text-decoration:none; font-weight:600; transition:background 0.2s; box-shadow:0 1px 4px rgba(211,47,47,0.08); display:inline-block;">
                        Eliminar
                    </a>
                </th>
            </tr>
            <?php endwhile; ?>
        </tbody>
      </table>
    </div>

     <a href="multas.php" style="position:fixed; bottom:20px; right:20px; background:#2196F3; color:white; padding:12px 20px; font-size:16px; border:none; border-radius:8px; text-decoration:none; box-shadow:0 4px 8px rgba(0,0,0,0.2); cursor:pointer;">⬆ Regresar</a>

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

    <script>
    document.getElementById('tipo_multa').addEventListener('change', function() {
        let montoInput = document.getElementById('monto');
        let descInput = document.getElementById('descripccion');

        switch(this.value) {
            case 'Desperdicio De Agua':
                montoInput.value = '$500';
                descInput.value = "Si el cliente hace uso innecesario de agua o tiene fugas sin reparar deberá pagar una multa.";
                break;
            case 'Conexiones Ilegales':
                montoInput.value = '$450';
                descInput.value = "Si el cliente se conecta ilegalmente a la red de agua potable deberá pagar una multa.";
                break;
            case 'Pagos Tardios':
                montoInput.value = '$100';
                descInput.value = "Si el cliente olvida hacer su pago puntual del servicio de agua deberá pagar una multa.";
                break;
            case 'Contaminacion del agua':
                montoInput.value = '$350';
                descInput.value = "Si el cliente tira sustancias contaminantes en la red de agua potable deberá pagar una multa.";
                break;
            case 'Consumo Excesivo':
                montoInput.value = '$200';
                descInput.value = "Si el cliente supera un límite de consumo establecido deberá pagar una multa.";
                break;
            case 'Daños a la Infraestructura':
                montoInput.value = '$800';
                descInput.value = "Si un cliente causa daños a la infraestructura del sistema de agua (tuberías, medidores, etc.), deberá pagar una multa.";
                break;
            case 'Incumplimiento De Reglas':
                montoInput.value = '$400';
                descInput.value = "Si el cliente no cumple con las reglas sobre el uso del agua deberá pagar una multa.";
                break;
            case 'Obstrucción a Inspecciones':
                montoInput.value = '$280';
                descInput.value = "Si el cliente se niega a las inspecciones del sistema de agua en la propiedad deberá pagar una multa.";
                break;
            default:
                montoInput.value = '';
                descInput.value = '';
        }
    });
    </script>
</body>
</html>
