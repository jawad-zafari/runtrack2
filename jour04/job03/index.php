<?php
$count = count($_POST);
if(isset($_POST)) {
    echo  "Le nombre d'argument GET envoyé est : " . $count;
  } 
else { echo "« Aucun paramètre GET n'a été envoyé. »";}
?>
