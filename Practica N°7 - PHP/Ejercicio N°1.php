<?php
if (isset($_POST['tema'])) {
    $tema = $_POST['tema'];
    setcookie("tema", $tema, time() + 60*60*24*30);
} elseif (isset($_COOKIE['tema'])) {
    $tema = $_COOKIE['tema'];
} else {
    $tema = "claro";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Página con estilo</title>
<link rel="stylesheet" href="css/<?php echo $tema; ?>.css">
</head>
<body>
<h1>Bienvenido con estilo: <?php echo ucfirst($tema); ?></h1>
<form method="post">
  <label>Elegí un estilo:</label><br>
  <select name="tema">
    <option value="claro" <?php if($tema=="claro") echo "selected"; ?>>Claro</option>
    <option value="oscuro" <?php if($tema=="oscuro") echo "selected"; ?>>Oscuro</option>
    <option value="azul" <?php if($tema=="azul") echo "selected"; ?>>Azul</option>
  </select>
  <button type="submit">Guardar</button>
</form>
</body>
</html>
