<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$newStr = "";

for ($i = 0; $i < strlen($str); $i++) {
    if ($i == strlen($str) - 1) {$newStr .= $str[0];} 
    else {$newStr .= $str[$i + 1];}
}

echo $newStr;
?>