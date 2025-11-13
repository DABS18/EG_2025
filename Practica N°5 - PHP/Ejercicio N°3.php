<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre   = trim($_POST['nombre']   ?? '');
    $email    = trim($_POST['email']    ?? '');
    $respuesta_email = trim($_POST['respuesta_email'] ?? '');

    $subject = "$nombre te recomienda este sitio web";
    $message = 
      "Hola,\n\n" .
      "$nombre ($email) cree que te podría interesar esta web:\n" .
      "https://www.google.com\n\n"
      ;

    $headers = "From: $nombre <$email>\r\n";

    if ( mail($respuesta_email, $subject, $message, $headers) ) {
        echo "Email enviado a $respuesta_email.";
    } else {
        echo "Error al enviar el email.";
    }
    exit;
}

?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Recomendar a un amigo</title></head>
<body>

<h2>Recomendá este sitio a un amigo</h2>
<form action="" method="post">
  Tu nombre:     <input type="text" name="nombre" required><br>
  Tu email:      <input type="email" name="email" required><br>
  Email del amigo: <input type="email" name="respuesta_email" required><br>
  <button type="submit">Enviar recomendación</button>
</form>

</body>
</html>