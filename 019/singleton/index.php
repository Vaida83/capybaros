<?php

require __Dir__ . '/Cart.php';

$cartOne = Cart::getCart();

$cartTwo = Cart::getCart();

echo '<pre>';

var_dump($cartOne);
var_dump($cartTwo);