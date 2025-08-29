<?php
include('conexion.php');
$con = connection();

$id = isset($_POST['id']) ? intval($_POST['id']) : 0;

if ($id > 0) {
    $sql = "DELETE FROM notas_calendario WHERE id = $id";
    if (mysqli_query($con, $sql)) {
        echo "ok";
    } else {
        echo mysqli_error($con); // Muestra el error real
    }
} else {
    echo "ID inválido";
}
?>