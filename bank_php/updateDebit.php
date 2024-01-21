<?php
session_start();
$id = $_GET['id'] ?? 0;

if (!$id) {
    header('Location: http://localhost/bank_php/index.php');
    exit;
}

$users = json_decode(file_get_contents(__DIR__ . '/data/users.json')); 
$money = ($_POST['withdraw']) > 0 ?  (float)$_POST['withdraw'] : 0;

if (is_numeric($_POST['withdraw'])) {
    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            if ($user['balance'] >= $money) {
                $user['balance'] =  $user['balance'] - $money;
                $users[$i] = $user;
                break;
            } else {
                $_SESSION['error'] = "Cannot withdraw $money € from $member[name]'s account. Maximal ammount $member[balance] €.";
                header('Location: http://localhost/bank_php/index.php');
                exit;
            }
        }
    }
} else {
    $_SESSION['error'] = "Input must be a number";
    header("Location: http://localhost/bank_php/withdraw.php?id=$id");
    exit;
}

file_put_contents(__DIR__ . '/data/users.json', serialize($users));
$_SESSION['success'] = "$money € was withdrawed from $user[name]'s account.";
header('Location: http://localhost/bank_php/index.php');
exit;