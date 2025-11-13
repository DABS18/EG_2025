<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre  = trim($_POST['nombre'] ?? '');
    $email   = trim($_POST['email']  ?? '');
    $consulta= trim($_POST['consulta'] ?? '');

    $to      = 'xx@gmail.com';
    $subject = "Consulta de $nombre";
    $body    = "De: $nombre <$email>\n\n" . wordwrap($consulta, 70);

    $headers = "From: $nombre <$email>\r\n" .
               "Reply-To: $email\r\n";

    if ( mail($to, $subject, $body, $headers) ) {
        echo "<p>Gracias, $nombre. Tu consulta ha sido enviada.</p>";
    } else {
        echo "<p>Error al enviar la consulta. Intenta nuevamente.</p>";
    }
    exit;
}

?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Contacto</title></head>
<body>

<h2>Formulario de Contacto</h2>
<form action="" method="post">
  Nombre:    <input type="text" name="nombre" required><br>
  Email:     <input type="email" name="email" required><br>
  Consulta:  <br>
  <textarea name="consulta" rows="5" cols="40" required></textarea><br>
  <button type="submit">Enviar</button>
</form>

</body>
</html>