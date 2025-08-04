<?php
$conn = mysqli_connect("localhost", "root", "", "jour09");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT salles.nom AS nom_salle, etages.nom AS nom_etage FROM salles JOIN etages ON salles.id_etage = etages.id";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<thead><tr><th>Nom de la salle</th><th>Nom de l'étage</th></tr></thead>";
echo "<tbody>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['nom_salle'] . "</td>";
    echo "<td>" . $row['nom_etage'] . "</td>";
    echo "</tr>";
}

echo "</tbody></table>";

mysqli_close($conn);
?>
