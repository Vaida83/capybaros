<?php

require __DIR__ .'/Nso.php';

$nso1 = new Nso(1);
$nso2 = $nso1; // by reference

$nso3 = new Nso(3);

$nso1->changeColor('blue');


echo '<pre>';
$nso1->speed = 'slow'; //galima perrasyti savybes, jeigu jos public

echo $nso1->speed . '<br>';
//echo $nso1->color . '<br>';
//echo $nso1->weight . '<br>';



var_dump($nso1);
//var_dump($nso2);
//var_dump($nso3);
