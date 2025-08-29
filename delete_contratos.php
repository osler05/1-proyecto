<?php
include('conexion.php');
$con = connection();

$id = $_GET['id'];

$stmt = $con->prepare("DELETE FROM contratos WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: contratos.php");
    exit();
} else {
    echo "Error al eliminar el contrato.";
}
?>