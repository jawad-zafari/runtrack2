<?php
$conn = mysqli_connect("localhost", "root", "", "jour09");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM salles ORDER BY capacite ASC";
$result = mysqli_query($conn, $sql);

