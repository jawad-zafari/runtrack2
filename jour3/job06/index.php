<?php
$str = "Les choses que l'on possede finissent par nous posseder.";
$reversed = "";
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reversed .= $str[$i];
}

echo $reversed;
?>
