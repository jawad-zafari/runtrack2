<?php
$conn = mysqli_connect("localhost", "root", "", "jour09");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT SUM(capacite) AS capacite_totale FROM salles";
$result = mysqli_query($conn, $sql);

;
?>
