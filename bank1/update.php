<?php
session_start();
// update box


$id = $_GET['id'] ?? 0;

if (!$id) {
    header('Location: http://localhost/capybaros/bank/read.php');
    exit;
}

$accounts = json_decode(file_get_contents(__DIR__ . '/data/accounts.json'), true);

foreach ($accounts as $i => $account) {
    if ($account['boxId'] == $id) {
        $account['amount'] = (int) $_POST['amount'];
        $accounts[$i] = $account;
        break;
    }
}
