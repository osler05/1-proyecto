<?php
include 'conexion.php';
$con = connection();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$tipo_pago = $_POST['tipo_pago'];
$fecha = $_POST['fecha'];
$costo = $_POST['costo'];
$metodo = $_POST['metodo'];
$direccion = $_POST['direccion'];
$descripcion = $_POST['descripcion'];

$sql ="UPDATE pagos SET nombre='$nombre', tipo_pago='$tipo_pago', fecha='$fecha', costo='$costo', metodo='$metodo', direccion='$direccion', descripcion='$descripcion' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: pagos.php");
    exit();
}
?>