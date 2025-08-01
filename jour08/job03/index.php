<?php
session_start();

if (!isset($_SESSION['names'])) {
    $_SESSION['names'] = [];
}

if (isset($_POST['prenom'])) {
    $_SESSION['names'][] = $_POST['prenom'];
}

if (isset($_POST['reset'])) {
    $_SESSION['names'] = [];
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

<form method="post">
    <input type="text" name="prenom" placeholder="Entrez votre nom">
    <button type="submit">Soumettre</button>
</form>

