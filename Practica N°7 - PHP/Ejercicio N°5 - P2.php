<?php
session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['clave'] = $_POST['clave'];
echo "<a href='Ejercicio N°5 - P3.php'>Ver variables</a>";
?>
