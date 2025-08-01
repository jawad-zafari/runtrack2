<?php
session_start();

if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

