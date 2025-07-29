<?php
$count = count($_POST);
echo "Le nombre d'argument POST envoyé est : " . $count;
?>

<form method="POST" action="">
  <input type="text" name="prenom" placeholder="Prénom">
  <input type="text" name="nom" placeholder="Nom">
  <input type="submit" value="Envoyer">
</form>
