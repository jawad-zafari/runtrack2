<?php
$conn = mysqli_connect("localhost", "root", "", "jour09");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT SUM(superficie) AS superficie_totale FROM etages";
$result = mysqli_query($conn, $sql);

