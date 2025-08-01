<?php
$cookie_name = "user_prenom";

if (isset($_POST['prenom'])) {
    setcookie($cookie_name, $_POST['prenom'], time() + (86400 * 30), "/");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

