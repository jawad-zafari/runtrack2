<?php
$conn = mysqli_connect("localhost", "root", "", "jour09");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT SUM(capacite) AS capacite_totale FROM salles";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<thead><tr><th>Capacité totale</th></tr></thead>";
echo "<tbody>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['capacite_totale'] . "</td>";
    echo "</tr>";
}

echo "</tbody></table>";

mysqli_close($conn);
?>
