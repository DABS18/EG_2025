<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $metro = isset($_POST['metro']) ? 1 : 0;

    $sql = "UPDATE Ciudades SET ciudad='$ciudad', pais='$pais', habitantes=$habitantes,
            superficie=$superficie, tieneMetro=$metro WHERE id=$id";
    mysqli_query($link, $sql) or die(mysqli_error($link));
    echo "Registro modificado correctamente.";
}

$result = mysqli_query($link, "SELECT * FROM Ciudades");
?>
<form method="post">
  <select name="id">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <option value="<?= $row['id'] ?>"><?= $row['ciudad'] ?></option>
    <?php } ?>
  </select><br>
  Ciudad: <input type="text" name="ciudad"><br>
  País: <input type="text" name="pais"><br>
  Habitantes: <input type="number" name="habitantes"><br>
  Superficie: <input type="number" step="0.01" name="superficie"><br>
  Tiene metro: <input type="checkbox" name="metro" value="1"><br>
  <button type="submit">Modificar</button>
</form>
<?php mysqli_close($link); ?>