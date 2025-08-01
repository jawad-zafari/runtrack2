<?php
$cookie_name = "nbvisites";

if (!isset($_COOKIE[$cookie_name])) {
    $visits = 1;
} else {
    $visits = $_COOKIE[$cookie_name] + 1;
}

