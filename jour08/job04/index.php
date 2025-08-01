<?php
$cookie_name = "user_prenom";

if (isset($_POST['prenom'])) {
    setcookie($cookie_name, $_POST['prenom'], time() + (86400 * 30), "/");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['deco'])) {
    setcookie($cookie_name, "", time() - 3600, "/");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

<?php if (!isset($_COOKIE[$cookie_name])): ?>
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez votre nom">
        <button type="submit" name="connexion">Connexion</button>
    </form>
<?php else: ?>
    <p>Bonjour <?= $_COOKIE[$cookie_name] ?>!</p>
    