<?php
if (isset($_GET['nombre'])) {
    if ($_GET['nombre'] % 2 == 0) {echo 'Nombre pair';} 
    else {echo 'Nombre impair';}
}
?>
