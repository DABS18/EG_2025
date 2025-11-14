<?php
if (isset($_COOKIE['contador'])) {
    $visitas = $_COOKIE['contador'] + 1;
    echo "<p>Has visitado esta página $visitas veces.</p>";
} else {
    $visitas = 1;
    echo "<p>Bienvenido, esta es tu primera visita.</p>";
}
setcookie("contador", $visitas, time() + 60*60*24*365);
?>
