<?php
include('conexion.php');
$con = connection();

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $fecha = $_POST['fecha'];
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];

    $sql = "INSERT INTO notas_calendario (fecha, titulo, texto) VALUES ('$fecha', '$titulo', '$texto')";
    mysqli_query($con, $sql);
    echo "ok";
} catch (Exception $e) {
    echo $e->getMessage();
}
?>