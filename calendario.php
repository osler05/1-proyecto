<?php
include('conexion.php');
$con = connection();

// Obtener todas las notas
$sql = "SELECT * FROM notas_calendario";
$query = mysqli_query($con, $sql);

$notas = [];
while ($row = mysqli_fetch_assoc($query)) {
    $notas[] = $row;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/calendario.css">
    <link rel="stylesheet" href="footer.css">
    <title>SCAP</title>
    <style>
    .calendar-table-container {
        width: 100%;
        display: flex;
        justify-content: center;
        margin-bottom: 24px;
    }
    .calendar-table {
        border-collapse: collapse;
        width: 80%;
        height: px;
        max-width: 1500px;
        background: #f8fafc;
        box-shadow: 0 2px 8px rgba(0,48,96,0.08);
        border-radius: 17px;
        overflow: hidden;
        font-family: inherit;
    }
    .calendar-table th, .calendar-table td {
        border: 1px solid #e0e6ed;
        text-align: center;
        padding: 18px 0;
        font-size: 1.1em;
        color: #003060;
        background: #f8fafc;
        transition: background 0.2s;
    }
    .calendar-table th {
        background: #e6ecf5;
        font-weight: 700;
        letter-spacing: 2px;
    }
    .calendar-table td {
        cursor: pointer;
        position: relative;
        min-width: 70px;
        width: 110px;
        height: 90px;
        vertical-align: top;
        box-sizing: border-box;
        overflow-y: auto;
    }
    .calendar-table td.available-day {
        background: #e6ecf5;
    }
    .calendar-table td.weekend-day {
        background: #dbe7f6;
        color: #0050a0;
    }
    .calendar-table td.non-working-day {
        background: #cfd8e3;
        color: #a0a0a0;
    }
    .calendar-table td:hover {
        background: #cfe2fa;
    }
    .event {
        background: #003060;
        color: #fff;
        border-radius: 6px;
        padding: 2px 6px;
        margin-top: 6px;
        font-size: 0.40em;
        cursor: pointer;
        box-shadow: 0 1px 4px rgba(0,48,96,0.08);
    }
    .calendar-header {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 18px;
        margin-bottom: 18px;
    }
    .calendar-header h2 {
        color: #003060;
        font-weight: 700;
        font-size: 1.7em;
        margin: 0;
    }
    .nav-btn {
        background: #003060;
        color: #fff;
        border: none;
        border-radius: 6px;
        padding: 8px 16px;
        font-size: 1.2em;
        cursor: pointer;
        transition: background 0.2s;
    }
    .nav-btn:hover {
        background: #0050a0;
    }
    #event-info {
        display: block;
        margin-bottom: 15px;
        padding: 16px 18px;
        background-color: #f0f4fa;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,48,96,0.10);
        font-size: 1.08em;
    }

    #event-info .titulo-nota {
        color: #003060;
        font-weight: bold;
        font-size: 1.2em;
        margin-bottom: 8px;
        display: block;
    }

    #event-info .texto-nota {
        color: #222;
        font-size: 1em;
        margin-top: 6px;
        display: block;
    }
    </style>
    <style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0; top: 0;
        width: 100vw; height: 100vh;
        background: rgba(0,48,96,0.18);
        align-items: center;
        justify-content: center;
    }
    .modal-content {
        background: #fff;
        padding: 32px 28px 24px 28px;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(0,48,96,0.18);
        min-width: 320px;
        max-width: 95vw;
        display: flex;
        flex-direction: column;
        gap: 14px;
        position: relative;
        font-family: inherit;
    }
    .modal-content h3 {
        margin: 0 0 10px 0;
        color: #003060;
        font-size: 1.5em;
        font-weight: 700;
        text-align: center;
    }
    .modal-input {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #e0e6ed;
        border-radius: 7px;
        font-size: 1em;
        margin-bottom: 6px;
        background: #f8fafc;
        color: #003060;
        transition: border 0.2s;
    }
    .modal-input:focus {
        border-color: #0050a0;
        outline: none;
        background: #e6ecf5;
    }
    .save-btn, .delete-btn, .cancel-btn {
        padding: 10px 18px;
        border-radius: 7px;
        border: none;
        font-size: 1em;
        font-weight: 600;
        cursor: pointer;
        margin-right: 8px;
        margin-top: 8px;
        transition: background 0.2s, color 0.2s;
    }
    .save-btn {
        background: #003060;
        color: #fff;
    }
    .save-btn:hover {
        background: #0050a0;
    }
    .delete-btn {
        background: #26c693ff;
        color: #fff;
    }
    .delete-btn:hover {
        background: #381cb7ff;
    }
    .cancel-btn {
        background: #e0e6ed;
        color: #003060;
    }
    .cancel-btn:hover {
        background: #cfd8e3;
    }
    </style>
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
                    <a class="btn btn-nav" href="./SERVICIOS/" onclick="event.preventDefault(); document.getElementById('dropdown-menu').classList.toggle('show');" style="font-size: 0.95em;">Servicios <i class="fas fa-caret-down"></i></a>
                    <div id="dropdown-menu" class="dropdown-content" style="display: none; position: absolute; background: #fff; min-width: 180px; box-shadow: 0 8px 16px rgba(0,0,0,0.2); z-index: 10; border-radius: 8px; overflow: hidden; border: 1px solid #e0e0e0;">
                        <ul style="list-style: none; margin: 0; padding: 0;">
                            <li>
                                <a href="./contratos.php" style="display: block; padding: 12px 18px; color: #003060; text-decoration: none; font-weight: 500; transition: background 0.2s;">
                                    Contratos
                                </a>
                            </li>
                            <li>
                                <a href="./calendario.php" style="display: block; padding: 12px 18px; color: #003060; text-decoration: none; font-weight: 500; transition: background 0.2s;">
                                    Calendario de notas
                                </a>
                            </li>
                            <li>
                                <a href="./pagos.php" style="display: block; padding: 12px 18px; color: #003060; text-decoration: none; font-weight: 500; transition: background 0.2s;">
                                    Pagos
                                </a>
                            </li>
                            <li>
                                <a href="./multas.php" style="display: block; padding: 12px 18px; color: #003060; text-decoration: none; font-weight: 500; transition: background 0.2s;">
                                    Multas
                                </a>
                            </li>
                        </ul>
                    </div>
                    <style>
                        #dropdown-menu ul li a:hover {
                            background: #f1f6fa;
                            color: #0050a0;
                        }
                    </style>
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
                </style>
            </div>
        </nav>
    </div>

    <h2 class="title" style="margin: 0 0 24px 0; color: #003060; font-size: 2.5em; letter-spacing: 2px; font-weight: 700; text-align: center;">
        Calendario de Notas
    </h2>
    <h3 class="title" style="margin: 0 0 24px 0; color: #003060; font-size: 1.15em; font-weight: 500; text-align: center;">
        En este calendario puede programar, editar o eliminar notas seleccionando el día correspondiente.
    </h3>
    <div class="calendar" style="margin-bottom: 32px;">
        <div class="calendar-header">
            <button class="nav-btn" onclick="changeMonth(-1)">◀</button>
            <h2 id="monthYear"></h2>
            <button class="nav-btn" onclick="changeMonth(1)">▶</button>
        </div>
        <div class="calendar-table-container">
            <table class="calendar-table" id="calendar-table">
                <thead>
                    <tr>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miércoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                        <th>Sábado</th>
                        <th>Domingo</th>
                    </tr>
                </thead>
                <tbody id="calendar-days"></tbody>
            </table>
        </div>
    </div>

    <div class="modal" id="modal">
        <div class="modal-content">
            <h3 id="modal-title">Agregar Nota</h3>
            <div id="event-info" style="display:none; margin-bottom: 15px; padding: 10px; background-color: #f0f0f0; border-radius: 5px;"></div>
            <input type="text" id="event-title" placeholder="Título de la nota" class="modal-input">
            <input type="text" id="event-text" placeholder="Texto de la nota" class="modal-input">
            <button class="save-btn" id="saveEventBtn">Guardar</button>
            <button class="delete-btn" id="deleteEventBtn" style="display:none;">Eliminar</button>
            <button class="cancel-btn" onclick="closeModal()">Cancelar</button>
        </div>
    </div>

    <script>
    // Notas desde PHP
    const notasBD = <?php echo json_encode($notas); ?>;

    // Convierte las notas en un objeto por fecha
    const notasPorFecha = {};
    notasBD.forEach(nota => {
        if (!notasPorFecha[nota.fecha]) notasPorFecha[nota.fecha] = [];
        notasPorFecha[nota.fecha].push({
            id: nota.id,
            title: nota.titulo,
            text: nota.texto
        });
    });

    const monthYear = document.getElementById('monthYear');
    const calendarDays = document.getElementById('calendar-days');
    const modal = document.getElementById('modal');
    const eventTitle = document.getElementById('event-title');
    const eventText = document.getElementById('event-text');
    const saveBtn = document.getElementById('saveEventBtn');
    const deleteBtn = document.getElementById('deleteEventBtn');

    const monthNames = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',
        'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    ];

    let currentDate = new Date();
    let activeDate = null;
    let editId = null;

    // Días no laborables (ejemplo: festivos)
    const nonWorkingDays = ['2025-12-25', '2025-01-01'];

    function renderCalendar(date) {
        const year = date.getFullYear();
        const month = date.getMonth();
        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);
        const startDay = (firstDay.getDay() + 6) % 7;
        const daysInMonth = lastDay.getDate();

        monthYear.textContent = `${monthNames[month]} de ${year}`;
        calendarDays.innerHTML = '';

        let day = 1;
        for (let row = 0; row < 6; row++) {
            const tr = document.createElement('tr');
            for (let col = 0; col < 7; col++) {
                const td = document.createElement('td');
                if (row === 0 && col < startDay) {
                    td.innerHTML = '';
                } else if (day > daysInMonth) {
                    td.innerHTML = '';
                } else {
                    const dateStr = `${year}-${(month + 1).toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;
                    td.textContent = day;
                    td.onclick = () => openModal(dateStr);

                    const dayOfWeek = new Date(year, month, day).getDay();

                    if (dayOfWeek === 0 || dayOfWeek === 6) {
                        td.classList.add('weekend-day');
                    } else if (nonWorkingDays.includes(dateStr)) {
                        td.classList.add('non-working-day');
                    } else {
                        td.classList.add('available-day');
                    }

                    // Mostrar notas de la BD
                    const eventos = notasPorFecha[dateStr] || [];
                    eventos.forEach(evt => {
                        const eDiv = document.createElement('div');
                        eDiv.className = 'event';
                        eDiv.textContent = evt.title;
                        eDiv.onclick = (ev) => {
                            ev.stopPropagation();
                            openModal(dateStr, evt);
                        };
                        td.appendChild(eDiv);
                    });

                    day++;
                }
                tr.appendChild(td);
            }
            calendarDays.appendChild(tr);
        }
    }

    function changeMonth(step) {
        currentDate.setMonth(currentDate.getMonth() + step);
        renderCalendar(currentDate);
    }

    function openModal(dateStr, event = null) {
        activeDate = dateStr;
        modal.style.display = 'flex';
        const eventInfo = document.getElementById('event-info');
        if (event) {
            eventTitle.value = event.title;
            eventText.value = event.text;
            editId = event.id;
            document.getElementById('modal-title').textContent = "Ver Nota";
            saveBtn.textContent = "Actualizar";
            deleteBtn.style.display = 'inline-block';
            // Muestra el recuadro con la nota
            eventInfo.style.display = 'block';
            eventInfo.innerHTML = `
    <span class="titulo-nota">${event.title}</span>
    <span class="texto-nota">${event.text}</span>
`;
            // Opcional: deshabilita los campos si solo quieres mostrar
            eventTitle.style.display = 'none';
            eventText.style.display = 'none';
            saveBtn.style.display = 'none';
        } else {
            eventTitle.value = '';
            eventText.value = '';
            editId = null;
            document.getElementById('modal-title').textContent = "Agregar Nota";
            saveBtn.textContent = "Guardar";
            deleteBtn.style.display = 'none';
            eventInfo.style.display = 'none';
            eventTitle.style.display = '';
            eventText.style.display = '';
            saveBtn.style.display = '';
        }
    }

    function closeModal() {
        modal.style.display = 'none';
    }

    saveBtn.onclick = () => {
        if (!eventTitle.value.trim()) {
            return alert("El título no puede estar vacío.");
        }
        if (!eventText.value.trim()) {
            return alert("El texto de la nota no puede estar vacío.");
        }

        const formData = new FormData();
        formData.append('fecha', activeDate);
        formData.append('titulo', eventTitle.value);
        formData.append('texto', eventText.value);

        let url = 'guardar_nota.php';
        if (editId) {
            formData.append('id', editId);
            url = 'actualizar_nota.php'; // Debes crear este archivo si quieres editar
        }

        fetch(url, {
            method: 'POST',
            body: formData
        })
        .then(res => res.text())
        .then(resp => {
            if (resp === "ok") {
                location.reload();
            } else {
                alert("Error al guardar la nota.");
            }
        });
    };

    deleteBtn.onclick = () => {
        if (!editId) return;
        if (!confirm("¿Estás seguro de que quieres eliminar esta nota?")) return;

        fetch('eliminar_nota.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'id=' + encodeURIComponent(editId)
        })
        .then(res => res.text())
        .then(resp => {
            if (resp === "ok") {
                location.reload();
            } else {
                alert("Error al eliminar la nota.");
            }
        });
    };

    renderCalendar(currentDate);
    </script>
</body>
</html>