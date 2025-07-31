<?php
function bonjour($jour) {
    if ($jour === true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// test
bonjour(true);  // Bonjour
bonjour(false); // Bonsoir
?>
