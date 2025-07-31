<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changer de style</title>
    <?php
    // Charger le style sélectionné s'il existe
    if (isset($_POST['style']) && file_exists($_POST['style'] . '.css')) {
        echo '<link rel="stylesheet" href="' . $_POST['style'] . '.css">';
    } else {
        echo '<link rel="stylesheet" href="style1.css">'; // Style par défaut
    }
    ?>
</head>
<body>
    <div class="container">
        <h1>Changer le style de la page</h1>
        
        <form method="post">
            <label for="style">Choisissez un style :</label>
            <select name="style" id="style">
                <option value="style1" <?php echo (isset($_POST['style']) && $_POST['style'] == 'style1') ? 'selected' : ''; ?>>Style 1</option>
                <option value="style2" <?php echo (isset($_POST['style']) && $_POST['style'] == 'style2') ? 'selected' : ''; ?>>Style 2</option>
                <option value="style3" <?php echo (isset($_POST['style']) && $_POST['style'] == 'style3') ? 'selected' : ''; ?>>Style 3</option>
            </select>
            
            <button type="submit">Appliquer le style</button>
        </form>
        
        <div class="preview">
            <h2>Prévisualisation</h2>
            <p>Ceci est un exemple de texte pour voir le style appliqué.</p>
            <button>Bouton exemple</button>
        </div>
    </div>
</body>
</html>
