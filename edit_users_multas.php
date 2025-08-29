<?php
include ('conexion.php');
$con = connection();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$tipo_multa = $_POST['tipo_multa'];
$monto = $_POST['monto'];
$descripccion = $_POST['descripccion'];

$sql = "UPDATE multas SET nombre='$nombre', fecha='$fecha', tipo_multa='$tipo_multa', monto='$monto', descripccion='$descripccion' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: multas.php");
    exit();
} else {
    // Muestra el error para depuración
    echo "Error en la consulta: " . mysqli_error($con);
}
?>