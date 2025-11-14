<?php
session_start();
$link = mysqli_connect("localhost","root","","Compras");
$total = 0;
echo "<h2>Carrito de compras</h2>";
if (isset($_SESSION['carrito'])) {
    foreach ($_SESSION['carrito'] as $id) {
        $result = mysqli_query($link, "SELECT * FROM catalogo WHERE id=$id");
        $row = mysqli_fetch_assoc($result);
        echo $row['producto']." - $".$row['precio']."<br>";
        $total += $row['precio'];
    }
    echo "<hr><strong>Total: $".$total."</strong>";
} else {
    echo "Carrito vacío.";
}
mysqli_close($link);
?>
