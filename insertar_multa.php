<?php
include ('conexion.php');
$con = connection();

$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$tipo_multa = $_POST['tipo_multa'];
$monto = $_POST['monto'];
$descripccion = $_POST['descripccion'];

$sql = "INSERT INTO multas (nombre, fecha, tipo_multa, monto, descripccion) VALUES ('$nombre', '$fecha', '$tipo_multa', '$monto', '$descripccion')";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: multas.php");
    exit();
} else {
    // Muestra el error para depuración
    echo "Error en la consulta: " . mysqli_error($con);
}
?>