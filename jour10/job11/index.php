<?php
$conn = mysqli_connect("localhost", "root", "", "jour09");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT AVG(capacite) AS capacite_moyenne FROM salles";
$result = mysqli_query($conn, $sql);

