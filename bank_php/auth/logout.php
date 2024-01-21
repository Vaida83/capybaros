<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
     header('HTTP/1.1 405 Method Not Allowed'); 
    exit;
}
if (isset($_SESSION['login']) && $_SESSION['login'] == 'logIn') {
    unset($_SESSION['login']);
    unset($_SESSION['name']);
}
header('Location: http://localhost/bank_php/auth/index.php');
exit;