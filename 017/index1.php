<?php

require __DIR__ .'/Bebras.php';

$bebras1 = new Bebras;
$bebras2 = new Bebras;


echo $bebras1->$koksSvoris();

$bebras1->pasverti();

$bebras1->duotiMaisto();

echo $bebras1->$koksSvoris();

