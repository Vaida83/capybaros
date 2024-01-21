<?php
session_start();

$id = $_GET['id'] ?? 0;

if (!$id) {
    header('Location: http://localhost/bank_php/index.php');
    exit;
}

$users = json_decode(file_get_contents(__DIR__ . '/data/accounts.json'), true);

$money = ($_POST['addMoney']) > 0 ?  (float)$_POST['addMoney'] : 0;

if (is_numeric($_POST['addMoney'])) {
    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            $user['balance'] =  $user['balance'] + $money; 
            $users[$i] = $user;
            break;
        }
    }
}else{
        $_SESSION['error'] = "Input must be a number";
        header("Location: http://localhost/bank_php/addMoney.php?id=$id");
        exit;
}

file_put_contents(__DIR__ . '/data/users.ser', serialize($users));
$_SESSION['success'] = "$money € was added to $user[name]'s account";
header('Location: http://localhost/bank_php/index.php');
exit;