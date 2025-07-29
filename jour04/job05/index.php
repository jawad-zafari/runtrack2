<?php
if ($_POST) {
    if ($_POST['username'] == 'John' && $_POST['password'] == 'Rambo') {
        echo 'C\'est pas ma guerre';
    } else {
        echo 'Votre pire cauchemar';
    }
}
?>

<form method="POST">
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <input type="submit" value="Se connecter">
</form>
