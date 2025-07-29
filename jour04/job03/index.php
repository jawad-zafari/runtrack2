<?php
$count = count($_POST);
if(isset($_POST)) {
    echo  "Le nombre d'argument GET envoyé est : " . $count;
  } 
else { echo "« Aucun paramètre GET n'a été envoyé. »";}
?>
<form method="POST" action="">
  <input type="text" name="prenom" placeholder="Prénom">
  <input type="text" name="nom" placeholder="Nom">
  <input type="submit" value="Envoyer">
</form>