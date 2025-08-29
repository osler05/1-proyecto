<?php
include ('conexion.php');

$con = connection();

$sql = "SELECT * FROM pagos";
$query = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/Pagos.css">
    <link rel="stylesheet" href="footer.css">
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
                    <div id="dropdown-menu" class="dropdown-content" style="position: absolute; right: 0; background: #fff; min-width: 180px; box-shadow: 0 8px 16px rgba(0,0,0,0.15); border-radius: 8px; z-index: 1000; padding: 10px 0;">
                        <ul style="list-style: none; margin: 0; padding: 0;">
                            <li><a href="./contratos.php" style="display: block; padding: 10px 24px; color: #003060; text-decoration: none; font-weight: 500;">Contratos</a></li>
                            <li><a href="./calendario.php" style="display: block; padding: 10px 24px; color: #003060; text-decoration: none; font-weight: 500;">Calendario de notas</a></li>
                            <li><a href="./pagos.php" style="display: block; padding: 10px 24px; color: #003060; text-decoration: none; font-weight: 500;">Pagos</a></li>
                            <li><a href="./multas.php" style="display: block; padding: 10px 24px; color: #003060; text-decoration: none; font-weight: 500;">Multas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
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
    <h2 style="text-align:center; color:#003060; margin-bottom: 32px; font-size:2em;">Pagos</h2>
    <form action="insertar_pagos.php" method="POST" style="display: flex; flex-direction: column; gap: 24px;">
        <div style="display: flex; gap: 32px; flex-wrap: wrap;">
           
            <div style="flex:1; min-width: 250px;">
                <label for="usuario" style="display:block; margin-bottom:8px; font-weight:600; color:#003060;">Nombre del cliente:</label>
                <input type="text" id="nombre" name="nombre" required maxlength="30" pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" title="El nombre no puede contener números" style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
                
            </div>


            <div style="flex:1; min-width: 250px;">
                <label for="nombre" style="display:block; margin-bottom:8px; font-weight:600; color:#003060;">Tipo de pago:</label>
                        
                <select id="tipo_pago" name="tipo_pago" required 
                style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
                <option value="">-- Selecciona un pago --</option>
                <option value="pago residencial">Pago residencial </option>
                <option value="pago comercial">Pago comercial </option>
                <option value="pago público">Pago público </option>
                <option value="pago agrícola">Pago agrícola </option>
            </select>
            </div>
            <div style="flex:1; min-width: 250px;">
                <label for="fecha" style="display:block; margin-bottom:8px; font-weight:600; color:#003060;">Fecha del pago a realizar:</label>
                <input type="date" id="fecha" name="fecha" required value="<?php echo date('Y-m-d'); ?>" onkeydown="return false;" style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
                
            </div>
            <div style="flex:1; min-width: 250px;">
                <label for="monto" type="solo diez numeros" style="display:block; margin-bottom:8px; font-weight:600; color:#003060;">Costo:</label>
               <select id="costo" name="costo" required 
                style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
                <option value="">-- Selecciona un costo --</option>
                <option value="Mensual-1200">  Mensual-1200</option>
                <option value="Bimestral-2500"> Bimestral-2500</option>
                <option value="Anual-publico-2000">Anual-publico-2000</option>
            </select>
            </div>
            <div style="flex:1; min-width: 250px;">
                <label for="id_contrato" style="display:block; margin-bottom:8px; font-weight:600; color:#003060;">Metodo de pago:</label>
                 <select id="metodo" name="metodo" required 
                style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
                <option value="">-- Selecciona un metodo --</option>
                <option value="Efectivo"> Efectivo</option>
            </select>
            </div>
            <div style="flex:1; min-width: 250px;">
                <label for="id_contrato" style="display:block; margin-bottom:8px; font-weight:600; color:#003060;">Dirección:</label>
                
                <input type="tex" id="direccion" name="direccion" required maxlength="30"  required style="width:100%;margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
            </div>
        </div>
        <label for="descripcion" style="display:block; margin-bottom:8px; font-weight:600; color:#003060;">Descripción del pago:</label>
        <select id="descripcion" name="descripcion" required style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de; pointer-events: none;">

         
                style="width:100%; margin-bottom:20px; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
                <option value=""> </option>
                <option value="pago residencial - Agua potable para viviendas particulares, incluye consumo básico ($1200)">Pago residencial - Agua potable para viviendas particulares, incluye consumo básico ($1200)</option>
                <option value="pago comercial - Agua potable para negocios, industrias y comercios ($2500)">Pago comercial - Agua potable para negocios, industrias y comercios ($2500)</option>
                <option value="pago público - Agua potable para instituciones públicas como escuelas y hospitales ($2000)">Pago público - Agua potable para instituciones públicas como escuelas y hospitales ($2000)</option>
                <option value="pago agrícola - Agua potable para riego con restricciones para sostenibilidad ($4500)">Pago agrícola - Agua potable para riego con restricciones para sostenibilidad ($4500)</option>
            </select>


        <div style="text-align:center;">
            <button type="submit" style="background:#003060; color:#fff; padding:12px 36px; border:none; border-radius:8px; font-size:1.1em; font-weight:600; cursor:pointer; box-shadow:0 2px 8px rgba(0,48,96,0.10); transition:background 0.2s;">
                Agregar
            </button>
            <h1 style="color:#003060; margin-top:20px; font-size:1.2em;">Consultar pago en la parte inferior</h1>
        </div>
    </form>
</div>

<div id="listaContratos" style="max-width:900px; margin:40px auto 0 auto; padding:24px; border-radius:12px; background:#f8fbff; box-shadow:0 2px 12px rgba(0,48,96,0.07);">
    <h3 style="color:#003060; margin-bottom:18px;">Pagos realizados</h3>
    <table id="contratosUl" style="width:100%; border-collapse:collapse; margin-top:16px;">
        <thead>
            <tr style="background-color:#003060; color:#fff;">
                <th style="padding:12px; text-align:left;">numero de pagos del mes</th>
                <th style="padding:12px; text-align:left;">Nombre del cliente</th>
                <th style="padding:12px; text-align:left;">Tipo de pago</th>
                <th style="padding:12px; text-align:left;">Fecha de pago</th>
                <th style="padding:12px; text-align:left;">Costo</th>
                <th style="padding:12px; text-align:left;">Metodo de pago</th>
                <th style="padding:12px; text-align:left;">Dirección</th>
                <th style="padding:12px; text-align:left;">Descripción</th>
                <th></th>
                <th></th>
                <button class="btn btn-print" style="
    background-color: #1976d2;
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12);
    transition: background-color 0.3s ease;
    margin: 10px 0;
">
    Imprimir 🖨
</button>

            </tr>
            
        </thead>
        
        
        <tbody>
            <?php while ($row = mysqli_fetch_array($query)): ?>
             <tr style="background-color:#f0f4f8; color:#003060;">
                <th><?php echo htmlspecialchars($row['id']); ?></th>
                <th><?php echo htmlspecialchars($row['nombre']); ?></th>
                <th><?php echo htmlspecialchars($row['tipo_pago']); ?></th>
                <th><?php echo htmlspecialchars($row['fecha']); ?></th>
                <th><?php echo htmlspecialchars($row['costo']); ?></th>
                <th><?php echo htmlspecialchars($row['metodo']); ?></th>
                <th><?php echo htmlspecialchars($row['direccion']); ?></th>
                <th><?php echo htmlspecialchars($row['descripcion']); ?></th>
                <th>
                    <a href="update_pagos.php?id=<?php echo htmlspecialchars($row['id']); ?>" 
                       style="background:#1976d2; color:#fff; padding:8px 18px; border-radius:6px; text-decoration:none; font-weight:600; transition:background 0.2s; box-shadow:0 1px 4px rgba(25,118,210,0.08); display:inline-block;">
                        Editar
                    </a>
                </th>
                <th>
                    <a href="delete_pagos.php?id=<?php echo htmlspecialchars($row['id']); ?>" 
                       style="background:#d32f2f; color:#fff; padding:8px 18px; border-radius:6px; text-decoration:none; font-weight:600; transition:background 0.2s; box-shadow:0 1px 4px rgba(211,47,47,0.08); display:inline-block;">
                        Eliminar
                    </a>
                </th>
            </tr>
            <?php endwhile; ?>
            
            

        </tbody>
    </table>
</div>

<script>
    const printButton = document.querySelector('.btn-print');
    printButton.addEventListener('click', () => {
        window.print();
    });
    
    // Efecto hover para mejor interactividad
    printButton.addEventListener('mouseover', () => {
        printButton.style.backgroundColor = '#1565c0';
    });
    printButton.addEventListener('mouseout', () => {
        printButton.style.backgroundColor = '#1976d2';
    });
</script>

<a href="pagos.php" style="position:fixed; bottom:20px; right:20px; background:#2196F3; color:white; padding:12px 20px; font-size:16px; border:none; border-radius:8px; text-decoration:none; box-shadow:0 4px 8px rgba(0,0,0,0.2); cursor:pointer;">⬆ Regresar</a>

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
        const tipoPago = document.getElementById('tipo_pago');
        const metodo = document.getElementById('metodo');
        const descripcion = document.getElementById('descripcion');

        tipoPago.addEventListener('change', () => {
            let value = tipoPago.value;
            if (value === "pago residencial") {
                metodo.value = "Efectivo";
                descripcion.value = "pago residencial - Agua potable para viviendas particulares, incluye consumo básico ($1200)";
            }
            if (value === "pago comercial") {
                metodo.value = "Efectivo";
                descripcion.value = "pago comercial - Agua potable para negocios, industrias y comercios ($2500)";
            }
            if (value === "pago público") {
                metodo.value = "Efectivo";
                descripcion.value = "pago público - Agua potable para instituciones públicas como escuelas y hospitales ($2000)";
            }
            if (value === "pago agrícola") {
                metodo.value = "Efectivo";
                descripcion.value = "pago agrícola - Agua potable para riego con restricciones para sostenibilidad ($4500)";
            }
        });
    </script>

</body>
</html>
