<?php
session_start();
require __DIR__ .'/functions.php';
$users = json_decode(file_get_contents(__DIR__ . '/data/accounts.json'));  

newMemberSamePersonalCodeValidation($users);

nameLengthValidation($_POST);

personalCodeValidation($_POST['PC']);

createNewAccount($users);