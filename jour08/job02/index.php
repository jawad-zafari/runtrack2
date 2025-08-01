<?php
$cookie_name = "nbvisites";

if (!isset($_COOKIE[$cookie_name])) {
    $visits = 1;
} else {
    $visits = $_COOKIE[$cookie_name] + 1;
}

setcookie($cookie_name, $visits, time() + (86400 * 30), "/");

echo "Nombre de vues : " . $visits;

if (isset($_POST['reset'])) {
    setcookie($cookie_name, "", time() - 3600, "/");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>
