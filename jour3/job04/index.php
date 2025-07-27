<?php
$str = "Dans l'espace, personne ne vous entend crier";
$count = 0;
for ($i = 0; isset($str[$i]); $i++) { $count++;}

echo "Nombre de caractères : " . $count;
?>
