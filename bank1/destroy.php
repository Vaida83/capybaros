<?php
session_start();
// destroy box by id

$id = $_GET['id'] ?? 0;

$accounts = json_decode(file_get_contents(__DIR__ . '/data/accounts.json'), true);
foreach ($accounts as $index => $account) {
    if ($accounts['boxId'] == $id) {
        unset($accounts[$index]);
        break;
    }
}
$accounts = array_values($accounts);
file_put_contents(__DIR__ . '/data/accounts.json', json_encode($accounts, JSON_PRETTY_PRINT));

$_SESSION['error'] = "Account #$id is deleted";


header('Location: http://localhost/capybaros/bank/read.php');