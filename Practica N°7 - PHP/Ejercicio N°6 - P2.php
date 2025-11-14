<?php
session_start();
$link = mysqli_connect("localhost","root","","base2");
$mail = $_POST['mail'];
$result = mysqli_query($link, "SELECT nombre FROM alumnos WHERE mail='$mail'");
if ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['nombre'] = $row['nombre'];
    echo "Bienvenido, ".$_SESSION['nombre']." <a href='Ejercicio N°6 - P3.php'>Ir a página 3</a>";
} else {
    echo "Mail no encontrado.";
}
mysqli_close($link);
?>
