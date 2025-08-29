<?php
session_start();
session_unset(); // Limpia variables de sesión
session_destroy(); // Destruye la sesión

// Evita que el navegador guarde la página anterior
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Redirige al login
header("Location: index.php"); // O tu archivo de login
exit();
?>
