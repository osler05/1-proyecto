<?php
include ('conexion.php');
$con = connection();

$nombre        = $_POST['nombre']        ?? '';
$direcion      = $_POST['direcion']      ?? '';
$numero        = $_POST['numero']        ?? '';
$tipo_contrato = $_POST['tipo_contrato'] ?? '';
$fecha_inicio  = $_POST['fecha_inicio']  ?? '';
$monto         = $_POST['monto']         ?? '';
$descripccion  = $_POST['descripccion']  ?? '';

// Evitar inyección SQL usando mysqli_real_escape_string (opcional pero recomendable)
$nombre        = mysqli_real_escape_string($con, $nombre);
$direcion      = mysqli_real_escape_string($con, $direcion);
$tipo_contrato = mysqli_real_escape_string($con, $tipo_contrato);
$descripccion  = mysqli_real_escape_string($con, $descripccion);

// Insertar especificando columnas excepto el id autoincrement
$sql = "INSERT INTO contratos (nombre, direcion, numero, tipo_contrato, fecha_inicio, monto, descripccion) 
        VALUES ('$nombre', '$direcion', $numero, '$tipo_contrato', '$fecha_inicio', $monto, '$descripccion')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: contratos.php");
    exit();
} else {
    echo "Error en la consulta: " . mysqli_error($con);
}
?>
