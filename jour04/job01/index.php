<?php
$count = count($_GET);
echo "Le nombre d'argument GET envoyé est : " . $count;
?>

<form>
  <input type="text" name="prenom" placeholder="Prénom">
  <input type="text" name="nom" placeholder="Nom">
  <input type="submit" value="Envoyer">
</form>
