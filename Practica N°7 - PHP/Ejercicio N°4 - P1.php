<?php
if (isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
    setcookie("titular", $tipo, time() + 60*60*24*30);
} elseif (isset($_COOKIE['titular'])) {
    $tipo = $_COOKIE['titular'];
} else {
    $tipo = "";
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Periódico</title></head>
<body>
<form method="post">
  <h2>Elige el tipo de titular</h2>
  <input type="radio" name="tipo" value="politica" <?= $tipo=="politica"?"checked":"" ?>> Política
  <input type="radio" name="tipo" value="economica" <?= $tipo=="economica"?"checked":"" ?>> Económica
  <input type="radio" name="tipo" value="deportiva" <?= $tipo=="deportiva"?"checked":"" ?>> Deportiva
  <button type="submit">Mostrar</button>
</form>

<hr>
<?php
if ($tipo=="politica") {
    echo "<h3>Noticia Política: Nuevo acuerdo internacional.</h3>";
} elseif ($tipo=="economica") {
    echo "<h3>Noticia Económica: Suben los mercados globales.</h3>";
} elseif ($tipo=="deportiva") {
    echo "<h3>Noticia Deportiva: Argentina gana nuevamente.</h3>";
} else {
    echo "<h3>Todas las noticias:</h3>
          <ul>
            <li>Política...</li>
            <li>Económica...</li>
            <li>Deportiva...</li>
          </ul>";
}
?>
<a href="Ejercicio N°4 - P2.php">Borrar preferencia</a>
</body>
</html>
