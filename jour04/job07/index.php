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

     