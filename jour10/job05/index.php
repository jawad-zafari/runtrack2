<?php
$conn = mysqli_connect("localhost", "root", "", "jour09");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM etudiants WHERE DATEDIFF(CURRENT_DATE, naissance)/365 < 18";
$result = mysqli_query($conn, $sql);

