<?php
include('conexion.php');
$con = connection();

$id = $_GET['id'];
$sql = "SELECT * FROM pagos WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<body style="background: linear-gradient(135deg, #e3f2fd 0%, #b3c6e0 50%, #5b93bb 100%);"></body>
<style>
    :root {
        --azul-principal: #003060;
        --azul-secundario: #1976d2;
        --azul-claro: #5b93bb;
        --azul-oscuro: #003060;
        --blanco: #ffffff;
        --gris-claro: #f4f8fb;
        --gris-borde: #b3c6e0;
    }
    body {
        background: linear-gradient(135deg, #e3f2fd 0%, #b3c6e0 50%, #5b93bb 100%);
        font-family: 'Segoe UI', Arial, sans-serif;
    }
    .form-container {
        max-width: 600px;
        margin: 40px auto;
        padding: 32px 40px;
        border: 1px solid var(--azul-oscuro);
        border-radius: 16px;
        background: var(--gris-claro);
    }
    h2 {
        text-align: center;
        color: var(--azul-oscuro);
        margin-bottom: 32px;
    }
    label {
        font-weight: 600;
        color: var(--azul-oscuro);
    }
    input[type="text"], input[type="number"], input[type="date"], textarea {
        width: 100%;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid var(--gris-borde);
        background: var(--blanco);
    }
    button[type="submit"] {
        background: var(--azul-oscuro);
        color: var(--blanco);
        padding: 12px 36px;
        border: none;
        border-radius: 8px;
        font-size: 1.1em;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s;
    }
    button[type="submit"]:hover {
        background: var(--azul-secundario);
    }
</style>

<div class="form-container">
    <h2>Editar pago</h2>
    <form action="edit_users_pagos.php" method="POST" style="display: flex; flex-direction: column; gap: 24px;">
        <!-- Campo oculto para enviar el ID -->
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">

        <div>
            <label for="nombre_cliente">Nombre de cliente:</label>
            <input type="text" id="nombre_cliente" name="nombre" value="<?php echo htmlspecialchars($row['nombre']); ?>" required>
        </div>

        <div>
            <label for="tipo_pago">Tipo de contrato:</label>
            <input type="text" id="tipo_pago" name="tipo_pago" value="<?php echo htmlspecialchars($row['tipo_pago']); ?>" required>
        </div>

        

        <div>
            <label for="monto">Costo:</label>
            <input type="text" id="monto" name="costo" value="<?php echo htmlspecialchars($row['costo']); ?>" required>
        </div>

        <div>
            <label for="concepto">Metodo de pago:</label>
            <textarea id="concepto" name="metodo" rows="3" required><?php echo htmlspecialchars($row['metodo']); ?></textarea>
        </div>

        <div>
            <label for="direccion">Dirección:</label>
            <textarea id="direccion" name="direccion" rows="3" required><?php echo htmlspecialchars($row['direccion']); ?></textarea>
        </div>

        <div>
            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" value="<?php echo htmlspecialchars($row['descripcion']); ?>" required>
        </div>

        <div style="text-align:center;">
            <button type="submit">Actualizar</button>
        </div>
    </form>
</div>
