<?php
//Se connecter à la base de données
$conn = mysqli_connect("localhost", "root", "", "jour09");

// Vérifier la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Exécuter la requête
$sql = "SELECT * FROM etudiants";
$result = mysqli_query($conn, $sql);

