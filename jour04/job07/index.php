<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 07 - Dessiner une maison</title>
</head>
<body>
    <h2>Formulaire pour dessiner une maison</h2>
    <form method="POST" action="index.php">
        <label for="largeur">Largeur :</label>
        <input type="text" name="largeur" id="largeur" required>
        <br><br>
        <label for="hauteur">Hauteur :</label>
        <input type="text" name="hauteur" id="hauteur" required>
        <br><br>
        <input type="submit" value="Dessiner">
    </form>

    <?php
    if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
        $largeur = (int)$_POST['largeur'];
        $hauteur = (int)$_POST['hauteur'];

      // Valider les entrées
        if ($largeur <= 0 || $hauteur <= 0) {
            echo "<p>Les valeurs doivent être positives !</p>";
        } else {
            // Pour s'afficher correctement dans le navigateur
            echo "<pre>"; 
            // Dessine le toit (triangle)
            $roof_height = ceil($largeur / 1.965); // Hauteur du plafond en fonction de la largeur
            for ($i = 0; $i < $roof_height; $i++) {
            // distance à partir de la gauche
                echo str_repeat(" ", $roof_height - $i - 1);
               // Côté gauche du toit
                echo "/";
               // Intérieur du toit
                echo str_repeat("_", $i * 2);
                // Côté droit du toit
                echo "\\";
                echo "\n";
            }

            