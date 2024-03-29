<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

use App\App;
use App\Auth;
use App\Message;
use App\Error;

require '../vendor/autoload.php';

define('ROOT', __DIR__ . '/../');
define('URL', 'http://php-bank-oop.test');

Auth::get();
Message::get();
Error::get();

echo App::run();
