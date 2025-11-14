<?php
session_start();
echo "<p>Usuario: " . $_SESSION['usuario'] . "</p>";
echo "<p>Clave: " . $_SESSION['clave'] . "</p>";
?>
