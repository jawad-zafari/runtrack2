<?php
$conn = mysqli_connect("localhost", "root", "", "jour09");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM etudiants WHERE prenom LIKE 'T%'";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<thead><tr><th>Prénom</th><th>Nom</th><th>Naissance</th><th>Sexe</th><th>Email</th></tr></thead>";
echo "<tbody>";

