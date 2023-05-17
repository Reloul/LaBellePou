<?php
session_start();
$isLoggedIn = false;
$email = '';

if (isset($_SESSION['email'])) {
    $isLoggedIn = true;
    $email = $_SESSION['email'];
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: ../index.php');
    exit;
}
?>