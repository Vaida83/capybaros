<?php
session_start();

$accountId = rand(100000000000000000, 999999999999999999);
$amount = $_POST['amount'] ?? 0;

$accounts = json_decode(file_get_contents(__DIR__ . '/data/accounts.json'), true);
$accounts[] = [
    'boxId' => $accountId,
    'amount' => (int) $amount,
];
file_put_contents(__DIR__ . '/data/boxes.json', json_encode($boxes, JSON_PRETTY_PRINT));

$_SESSION['success'] = "Box #$accountId created";

header('Location: http://localhost/capybaros/bank/read.php');