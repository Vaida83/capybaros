<?php
session_start();

echo $_SESSION['mano_sesija'];
echo '<br>';
echo $_SESSION['logged'];
echo '<br>';
if ($_SESSION['log_time'] < time() 10) {
    
}
