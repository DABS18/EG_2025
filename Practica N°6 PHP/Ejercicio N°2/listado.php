<?php
include("conexion.php");
$result = mysqli_query($link, "SELECT * FROM Ciudades");
?>
<table border="1">
  <tr><th>ID</th><th>Ciudad</th><th>País</th><th>Habitantes</th><th>Superficie</th><th>Metro</th></tr>
  <?php while($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['ciudad'] ?></td>
    <td><?= $row['pais'] ?></td>
    <td><?= $row['habitantes'] ?></td>
    <td><?= $row['superficie'] ?></td>
    <td><?= $row['tieneMetro'] ? 'Sí' : 'No' ?></td>
  </tr>
  <?php } ?>
</table>
<?php mysqli_close($link); ?>