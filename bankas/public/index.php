<?php

use Bankas\App\App;
use Bankas\App\Message;
use Bankas\App\Auth;
session_start();

define('DB', 'maria');
 
require '../vendor/autoload.php';

define('ROOT', __DIR__ . '/../');
define('URL', 'http://bankas.test'); 

Message::get();
Auth::get();


echo App::run();