<?php
$usuario = $_POST['usuario'];
$contrasena = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

include('db.php');

$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contrasena'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location: pagina de inicio.php");

} else {
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">Error en la autenticación</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>