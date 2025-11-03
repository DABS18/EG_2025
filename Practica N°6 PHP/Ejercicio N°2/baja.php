<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $sql = "DELETE FROM Ciudades WHERE id = $id";
    mysqli_query($link, $sql) or die(mysqli_error($link));
    echo "Ciudad eliminada.";
}
$result = mysqli_query($link, "SELECT * FROM Ciudades");
?>
<form method="post">
  <select name="id">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <option value="<?= $row['id'] ?>"><?= $row['ciudad'] ?> (<?= $row['pais'] ?>)</option>
    <?php } ?>
  </select>
  <button type="submit">Eliminar</button>
</form>
<?php mysqli_close($link); ?>