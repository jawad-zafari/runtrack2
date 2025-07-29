<?php
$count = count($_GET);
if(isset($_GET)) {
    echo  "Le nombre d'argument GET envoyé est : " . $count;
  } 
else { echo "« Aucun paramètre GET n'a été envoyé. »";}
?>
<form method="GET" action="">
  <input type="text" name="prenom" placeholder="Prénom">
  <input type="text" name="nom" placeholder="Nom">
  <input type="submit" value="Envoyer">
</form>
 n