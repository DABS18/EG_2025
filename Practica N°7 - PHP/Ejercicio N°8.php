<form method="get">
  Buscar canción: <input type="text" name="q">
  <button type="submit">Buscar</button>
</form>

<?php
if (!empty($_GET['q'])) {
    $link = mysqli_connect("localhost","root","","prueba");
    $q = $_GET['q'];
    $res = mysqli_query($link, "SELECT * FROM buscador WHERE canciones LIKE '%$q%'");
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<p>".$row['canciones']."</p>";
        }
    } else {
        echo "No se encontraron resultados.";
    }
    mysqli_close($link);
}
?>
