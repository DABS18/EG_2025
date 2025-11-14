<?php
session_start();
$id = $_GET['id'];
$_SESSION['carrito'][] = $id;
echo "Producto agregado. <a href='Ejercicio N°7 - P1.php'>Volver</a>";
?>
