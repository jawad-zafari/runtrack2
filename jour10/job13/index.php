<?php
$conn = mysqli_connect("localhost", "root", "", "jour09");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT salles.nom AS nom_salle, etages.nom AS nom_etage FROM salles JOIN etages ON salles.id_etage = etages.id";
$result = mysqli_query($conn, $sql);

