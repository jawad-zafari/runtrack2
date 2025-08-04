<?php
$conn = mysqli_connect("localhost", "root", "", "jour09");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM salles ORDER BY capacite ASC";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<thead><tr><th>ID</th><th>Nom</th><th>ID étage</th><th>Capacité</th></tr></thead>";
echo "<tbody>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['id_etage'] . "</td>";
    echo "<td>" . $row['capacite'] . "</td>";
    echo "</tr>";
}

echo "</tbody></table>";

mysqli_close($conn);
?>
