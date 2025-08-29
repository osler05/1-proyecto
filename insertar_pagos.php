<?php
include ('conexion.php');
$con = connection();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$tipo_pago = $_POST['tipo_pago'];
$fecha = $_POST['fecha'];
$costo = $_POST['costo'];
$metodo = $_POST['metodo'];
$direccion = $_POST['direccion'];
$descripcion = $_POST['descripcion'];


// Especifica los campos en el INSERT según el orden y nombres de tu tabla
$sql = "INSERT INTO pagos (id, nombre, tipo_pago, fecha, costo, metodo, direccion, descripcion) VALUES ('$id', '$nombre', '$tipo_pago', '$fecha', '$costo', '$metodo', '$direccion', '$descripcion')";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: pagos.php");
    exit();
}
?>