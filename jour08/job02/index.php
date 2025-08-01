<?php
$cookie_name = "nbvisites";

if (!isset($_COOKIE[$cookie_name])) {
    $visits = 1;
} else {
    $visits = $_COOKIE[$cookie_name] + 1;
}

setcookie($cookie_name, $visits, time() + (86400 * 30), "/");

echo "Nombre de vues : " . $visits;

