<?php
// / Fonctions de conversion
function gras($str) {
    $words = explode(" ", $str);
    $result = "";
    foreach ($words as $word) {
        if (ctype_upper($word[0])) {
            $result .= "<b>$word</b> ";
        } else {
            $result .= "$word ";
        }
    }
    return $result;
}

function cesar($str, $decalage = 2) {
    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $shifted = $ascii + $decalage;
            if (ctype_upper($char)) {
                $shifted = ($shifted - 65) % 26 + 65;
            } else {
                $shifted = ($shifted - 97) % 26 + 97;
            }
            $char = chr($shifted);
        }
        $result .= $char;
    }
    return $result;
}

function plateforme($str) {
    $words = explode(" ", $str);
    $result = "";
    foreach ($words as $word) {
        if (substr($word, -2) == "me") {
            $result .= $word . "_ ";
        } else {
            $result .= "$word ";
        }
    }
    return $result;
}
// Traitement des formulaires
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $str = $_POST['str'] ?? '';
    $fonction = $_POST['fonction'] ?? '';
    
    $result = "";
    switch ($fonction) {
        case 'gras':
            $result = gras($str);
            break;
        case 'cesar':
            $result = cesar($str);
            break;
        case 'plateforme':
            $result = plateforme($str);
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Job 07</title>
</head>
<body>
    <form method="post">
        <input type="text" name="str" placeholder="Entrez votre texte">
        <select name="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <button type="submit">Valider</button>
    </form>
    
    <?php if (isset($result)): ?>
        <div>Résultat: <?php echo $result; ?></div>
    <?php endif; ?>
</body>
</html>
