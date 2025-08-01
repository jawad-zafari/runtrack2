<?php
session_start();

if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

$_SESSION['nbvisites']++;

echo "Nombre de vues : " . $_SESSION['nbvisites'];

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

