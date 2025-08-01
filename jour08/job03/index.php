<?php
session_start();

if (!isset($_SESSION['names'])) {
    $_SESSION['names'] = [];
}

