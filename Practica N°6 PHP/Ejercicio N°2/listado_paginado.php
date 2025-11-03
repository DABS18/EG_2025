<?php
include("conexion.php");

$porPagina = 5;
$pagina = isset($_GET['pag']) ? $_GET['pag'] : 1;
$inicio = ($pagina - 1) * $porPagina;

$total = mysqli_num_rows(mysqli_query($link, "SELECT * FROM Ciudades"));
$result = mysqli_query($link, "SELECT * FROM Ciudades LIMIT $inicio, $porPagina");
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

<?php
$paginas = ceil($total / $porPagina);
for ($i = 1; $i <= $paginas; $i++) {
    echo "<a href='?pag=$i'>$i</a> ";
}
mysqli_close($link);
?>