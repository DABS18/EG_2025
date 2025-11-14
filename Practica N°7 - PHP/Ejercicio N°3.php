<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    setcookie("usuario", $nombre, time() + 60*60*24*30);
    echo "<p>Hola $nombre, cookie creada.</p>";
}
?>
<form method="post">
  <label>Nombre de usuario:</label>
  <input type="text" name="nombre" value="<?php echo $_COOKIE['usuario'] ?? ''; ?>">
  <button type="submit">Guardar</button>
</form>
