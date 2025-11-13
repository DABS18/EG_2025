<?php 

$to      = 'xx@gmail.com';
$subject = 'Prueba de correo en HTML';

$message = '
<html>
  <head>
    <title>Correo de prueba</title>
  </head>
  <body>
    <h1 style="color: darkblue;">Hola</h1>
    <p>Este es un <strong>correo con formato HTML</strong> enviado desde el servidor.</p>
    <ul>
      <li>Item 1</li>
      <li>Item 2</li>
    </ul>
  </body>
</html>
';

// Cabeceras para el envio
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: Remitente <xx@hotmail.com>\r\n";

// Envío
if ( mail($to, $subject, $message, $headers) ) {
    echo "Correo enviado correctamente.";
} else {
    echo "Error al enviar el correo.";
}

?>
