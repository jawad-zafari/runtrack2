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
