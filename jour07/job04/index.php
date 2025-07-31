<?php
function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            return $a / $b;
        case '%':
            return $a % $b;
        default:
            return "Operation non valide";
    }
}

// test
echo calcule(5, '+', 3);  // 8
echo calcule(10, '/', 2); // 5
?>
