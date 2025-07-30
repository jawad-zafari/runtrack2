<?php
if (isset($_GET['nombre'])) {
    if ($_GET['nombre'] % 2 == 0) {echo 'Nombre pair';} 
    else {echo 'Nombre impair';}
}
?>
<form method="GET">
  <input type="number" name="nombre" placeholder="Entrez un nombre" required>
  <input type="submit" value="Vérifier">
</form>