<?php
include('conexion.php');
$con = connection();

$id = $_GET['id'];
$sql = "SELECT * FROM contratos WHERE id='$id'";
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
    input[type="text"], input[type="number"], textarea {
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
<div style="max-width: 600px; margin: 40px auto; padding: 32px 40px; border: 1px solid #003060; border-radius: 16px; background: #f4f8fb;">
    <h2 style="text-align:center; color:#003060; margin-bottom: 32px;">Editar Contrato</h2>
    <form action="edit_users_contratos.php" method="POST" style="display: flex; flex-direction: column; gap: 24px;">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">

    <div>
        <label for="id" style="font-weight:600; color:#003060;">ID Cliente:</label>
        <input type="text" id="id" name="id" value="<?php echo htmlspecialchars($row['id']); ?>" readonly style="width:100%; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
    </div>

    <div>
        <label for="nombre" style="font-weight:600; color:#003060;">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($row['nombre']); ?>" required style="width:100%; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
    </div>

    <div>
        <label for="direcion" style="font-weight:600; color:#003060;">Dirección:</label>
        <input type="text" id="direcion" name="direcion" value="<?php echo htmlspecialchars($row['direcion']); ?>" required style="width:100%; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
    </div>

    <div>
        <label for="numero" style="font-weight:600; color:#003060;">Número de contacto:</label>
        <input type="number" id="numero" name="numero" value="<?php echo htmlspecialchars($row['numero']); ?>" required style="width:100%; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
    </div>

    <div>
        <label for="tipo_contrato" style="font-weight:600; color:#003060;">Tipo de contrato:</label>
        <input type="text" id="tipo_contrato" name="tipo_contrato" value="<?php echo htmlspecialchars($row['tipo_contrato']); ?>" required style="width:100%; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
    </div>

    <div>
        <label for="fecha_inicio" style="font-weight:600; color:#003060;">Fecha:</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" value="<?php echo htmlspecialchars($row['fecha_inicio']); ?>" required style="width:100%; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
    </div>

    <div>
        <label for="monto" style="font-weight:600; color:#003060;">Monto:</label>
        <input type="number" id="monto" name="monto" value="<?php echo htmlspecialchars($row['monto']); ?>" required style="width:100%; padding:10px; border-radius:6px; border:1px solid #b0c4de;">
    </div>

    <div>
        <label for="descripccion" style="font-weight:600; color:#003060;">Descripción:</label>
        <textarea id="descripccion" name="descripccion" rows="3" required style="width:100%; padding:10px; border-radius:6px; border:1px solid #b0c4de;"><?php echo htmlspecialchars($row['descripccion']); ?></textarea>
    </div>

    <div style="text-align:center;">
        <button type="submit" style="background:#003060; color:#fff; padding:12px 36px; border:none; border-radius:8px; font-size:1.1em; font-weight:600; cursor:pointer;">
            Actualizar
        </button>
    </div>
</form>

</div>
</body>