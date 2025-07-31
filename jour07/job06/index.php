<?php
function leetSpeak($str) {
    $leet = [
        'a' => '4', 'A' => '4',
        'b' => '8', 'B' => '8',
        'e' => '3', 'E' => '3',
        'g' => '6', 'G' => '6',
        'l' => '1', 'L' => '1',
        's' => '5', 'S' => '5',
        't' => '7', 'T' => '7'
    ];
    
    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        $result .= isset($leet[$char]) ? $leet[$char] : $char;
    }
    return $result;
}

