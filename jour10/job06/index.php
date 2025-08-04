<?php
$conn = mysqli_connect("localhost", "root", "", "jour09");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(*) AS nb_etudiants FROM etudiants";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<thead><tr><th>Nombre d'étudiants</th></tr></thead>";
echo "<tbody>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['nb_etudiants'] . "</td>";
    echo "</tr>";
}

echo "</tbody></table>";

mysqli_close($conn);
?>
