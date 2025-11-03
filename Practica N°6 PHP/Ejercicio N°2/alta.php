<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("conexion.php");
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $metro = isset($_POST['metro']) ? 1 : 0;

    $sql = "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
            VALUES ('$ciudad', '$pais', $habitantes, $superficie, $metro)";
    mysqli_query($link, $sql) or die(mysqli_error($link));
    echo "Ciudad agregada correctamente.";
    mysqli_close($link);
}
?>
<form method="post">
  Ciudad: <input type="text" name="ciudad" required><br>
  País: <input type="text" name="pais" required><br>
  Habitantes: <input type="number" name="habitantes"><br>
  Superficie: <input type="number" step="0.01" name="superficie"><br>
  Tiene metro: <input type="checkbox" name="metro" value="1"><br>
  <button type="submit">Agregar</button>
</form>