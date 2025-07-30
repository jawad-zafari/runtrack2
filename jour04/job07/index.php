<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 07 - Dessiner une maison</title>
    <style>
        pre {
            font-family: monospace;
            font-size: 16px;
            line-height: 1;
        }
    </style>
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
        <input type="submit" value="Dessiner la maison">
    </form>

    <?php
    if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
        $largeur = (int)$_POST['largeur'];
        $hauteur = (int)$_POST['hauteur'];

        // اعتبارسنجی ورودی‌ها
        if ($largeur <= 0 || $hauteur <= 0) {
            echo "<p>Les valeurs doivent être positives !</p>";
        } else {
            echo "<pre>";

            // رسم سقف (مثلث)
            $roof_height = ceil($largeur / 3); // ارتفاع سقف
            for ($i = 0; $i < $roof_height; $i++) {
                // فاصله از چپ برای تراز کردن
                echo str_repeat(" ", $roof_height - $i - 1);
                // سمت چپ سقف
                echo "/";
                // فضای داخلی سقف
                // عرض کل خط آخر سقف باید $largeur + 2 باشد
                $inner_width = ($largeur - 2) + ($i * 2); // تنظیم عرض داخلی
                echo str_repeat("_", $inner_width);
                // سمت راست سقف
                echo "\\";
                echo "\n";
            }

            // رسم بدنه مستطیلی
            // خط بالایی بدنه
            // echo str_repeat("_", $largeur + 2) . "\n";

            // دیوارهای بدنه
            for ($i = 0; $i < $hauteur; $i++) {
                echo "|" . str_repeat("_", $largeur) . "|\n";
            }

            // خط پایینی بدنه
            // echo str_repeat("_", $largeur + 2) . "\n";

            echo "</pre>";
        }
    }
    ?>
</body>
</html>
