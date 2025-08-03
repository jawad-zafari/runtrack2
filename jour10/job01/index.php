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
// Créer un tableau HTML
echo "<table border='1'>";
echo "<thead><tr><th>Prénom</th><th>Nom</th><th>Naissance</th><th>Sexe</th><th>Email</th></tr></thead>";
echo "<tbody>";

// Afficher les données
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['prenom'] . "</td>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['naissance'] . "</td>";
    echo "<td>" . $row['sexe'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
}

echo "</tbody></table>";

// Fermer la connexion
mysqli_close($conn);
?>

