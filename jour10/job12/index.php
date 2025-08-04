<?php
$conn = mysqli_connect("localhost", "root", "", "jour09");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT prenom, nom, naissance FROM etudiants WHERE YEAR(naissance) BETWEEN 1998 AND 2018";
$result = mysqli_query($conn, $sql);

