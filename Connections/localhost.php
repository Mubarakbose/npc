<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$hostname_localhost = "localhost";
$database_localhost = "npc";
$username_localhost = "root";
$password_localhost = "";
$localhost = mysqli_connect(
    $hostname_localhost,
    $username_localhost,
    $password_localhost,
    $database_localhost
);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}
