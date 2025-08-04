<?php
$conn = mysqli_connect("localhost", "root", "", "jour09");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(*) AS nb_etudiants FROM etudiants";
$result = mysqli_query($conn, $sql);

