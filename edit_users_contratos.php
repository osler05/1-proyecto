<?php
include('conexion.php');
$con = connection();

$id            = $_POST['id']            ?? '';
$nombre        = $_POST['nombre']        ?? '';
$direccion     = $_POST['direcion']      ?? '';
$numero        = $_POST['numero']        ?? '';
$tipo_contrato = $_POST['tipo_contrato'] ?? '';
$fecha_inicio  = $_POST['fecha_inicio']         ?? '';
$monto         = $_POST['monto']         ?? '';
$descripcion   = $_POST['descripccion']  ?? '';

$sql = "UPDATE contratos SET 
    nombre = '$nombre',
    direcion = '$direccion',
    numero = '$numero',
    tipo_contrato = '$tipo_contrato',
    fecha_inicio = '$fecha_inicio',
    monto = '$monto',
    descripccion = '$descripcion'
    WHERE id = '$id'";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: contratos.php");
    exit();
} else {
    echo "Error en la consulta: " . mysqli_error($con);
}
?>

