<?php
session_start();
if (isset($_SESSION['nombre'])) {
    echo "Bienvenido nuevamente, ".$_SESSION['nombre'];
} else {
    echo "No puede acceder. <a href='Ejercicio N°6 - P1.php'>Volver</a>";
}
?>
