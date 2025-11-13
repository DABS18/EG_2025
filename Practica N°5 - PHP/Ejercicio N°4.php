<?php

session_start();

if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}

$_SESSION['visitas']++;
echo "<p>Visitaste esta página {$_SESSION['visitas']} veces en esta sesión.</p>";

if (!isset($_SESSION['paginas'])) {
    $_SESSION['paginas'] = [];
}
$current_page = basename($_SERVER['PHP_SELF']);
$_SESSION['paginas'][] = $current_page;

echo "<p>Has visitado " . $_SESSION['visitas'] . " páginas en esta sesión.</p>";
echo "<p>Páginas visitadas (orden cronológico):</p>";
echo "<ol>";
foreach ($_SESSION['paginas'] as $p) {
    echo "<li>" . htmlspecialchars($p) . "</li>";
}
echo "</ol>";
?>