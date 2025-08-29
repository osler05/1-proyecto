<?php
include('conexion.php');
$con = connection();

$id = $_GET['id'];

$stmt = $con->prepare("DELETE FROM multas WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: multas.php");
    exit();
} else {
    echo "Error al eliminar la multa.";
}
?>