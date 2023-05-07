<?php
session_start();

if (!isset($_SESSION["Username"]) || empty($_SESSION["Username"])) {
    header("location: login.php");
    exit;
}

$inactive = 1800; // 30 minutes of inactivity
if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        session_unset();
        session_destroy();
        header("location: login.php");
    }
}
$_SESSION['timeout'] = time();
